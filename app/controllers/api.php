<?php
//use Http\{sanctum};
use Ramsey\Uuid\Uuid;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;
use Auth\{authentication};
use JwtHttp\{jwtUtil};

final class api extends Controller {
    
    private $_fetching_sql_model_data;
    private $_store_sql_model_data;
    private $_delete_sql_model_data;
    private $jwtClassInt;
    private $jwtKey;
    public function __construct() 
    {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
       @$this->_store_sql_model_data = @$this->loadModel('Store');
       @$this->_delete_sql_model_data = $this->loadModel('Delete');
       @$this->jwtClassInt= new JwtHttp\jwtUtil;
       @$this->jwtKey = PRIVATE_KEY;
    }
  

    public function isValidUserToken(){
        if(validata_api_request_header()){
            if (isset($_SERVER['HTTP_AUTHORIZATION']) || !empty($_SERVER['HTTP_AUTHORIZATION'])) {
               try {
                    $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
                    
                    $jwt_post = str_replace('Bearer ', '', $authHeader);

                    $decoded = JWT::decode($jwt_post, new Key($this->jwtKey, 'HS256'));
                    $iss = $decoded->email;
                    $aud = $decoded->package;
                    $iat = $decoded->subscription_token;
                    $nbf = $decoded->expire_on;

                    if ($this->_fetching_sql_model_data->isVerifyAuthUser($iss, $aud, $iat)) {
                        return true;
                    }else {
                        error_log_auth();
                    }
                } catch (\Exception $e) {
                    // Handle token verification failure, e.g., unauthorized access
                    error_log_auth();
                }
            }else {
                error_log_auth();
            }
        }
    }
    

   

    public function returning_page($response)
    {
        switch ($response['inc']) {
            case false:
                break;
            default:
                $data = ['result' => $response];
                break;
        }
        echo json_encode($response);
    }


    public function is_connect()
    {
        if(isset($_GET['token']) && !empty($_GET['token']) && is_numeric($_GET['id'])){
            $id = strip_tags(trim($_GET['id'], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT));
            $_filter_=$this->_fetching_sql_model_data->get_connection_table($id);
            echo json_encode($_filter_);
        }
    }

    public function _is_connected(): bool
    { 
        return isset($_SESSION["user"]);
    }

    public function apicontext()
    { 
        if ($this->isValidUserToken()) {
            $response = [];
        
            if (isset($_GET['page'])) {
                $uid = Uuid::uuid1();
                $uuid = Uuid::uuid4();
                $uidString = $uid->toString(); 
                $uuidString = $uuid->toString(); // Get the UUID as a string
                // Format the UUID in the desired pattern
                $formattedUid = sprintf(
                    '%08s-%04s-%04s-%04s-%012s',
                    substr($uidString, 0, 8),
                    substr($uidString, 9, 4),
                    substr($uidString, 14, 4),
                    substr($uidString, 19, 4),
                    substr($uidString, 24)
                );
                $formattedUuid = sprintf(
                    '%08s-%04s-%04s-%04s-%012s',
                    substr($uuidString, 0, 8),
                    substr($uuidString, 9, 4),
                    substr($uuidString, 14, 4),
                    substr($uuidString, 19, 4),
                    substr($uuidString, 24)
                );
                $package= (trim((int)$_GET['library']));
                $subject= (trim((int)$_GET['subject']));
                if (isset($_GET['getbookcases']) && isset($_GET['library']) && isset($_GET['subject']) && isset($_GET['bookcases']) && !isset($_GET['bookshelves'])) {
                    dnd('2');
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $itemsPerPage = 40;
                    $offset = ($page - 1) * $itemsPerPage;
                    $category_as_bookcases=$_GET['bookcases'];
                    $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_journal_on_bookcase($formattedUid,$formattedUuid, $package, $subject, $category_as_bookcases, $offset, $itemsPerPage);
                    $activate_bookcases_sidebar = true;
                    if (!empty($get_bookshalvesinfo)) {
                        $response['status']=http_response_code(200);
                        $response['_items']=$get_bookshalvesinfo;
                    }
                }
            }
            else {
                $response['status']=http_response_code(301);
            }
        }else {
            $response['deliver_report_status']=http_response_code(200);
        }
        echo json_encode($response);
    }
   
    public function collect(){
        $response = [];
        
        if (isset($_GET['iat']) && isset($_GET['action'])) {
            $action = $_GET['target'];
            if (isset($_GET['target'])) { 
                if ($action=='central' && isset($_GET['v2']) && $_GET['v2']=='rgstr') {
                    $authClass= new Auth\authentication;
                    $authenticateUser = $authClass->auth_check();
                    if (!$authenticateUser) {
                        redirect('auth/login');
                    }else{
                         if (isset($_SERVER['HTTP_AUTHORIZATION']) || !empty($_SERVER['HTTP_AUTHORIZATION'])) {
                            try{
                                $response=[];
                                $authClass= new JwtHttp\jwtUtil;
                                $getJwtToken = $authClass::createTokenByUserDetails();
                                $response['v'] = json_decode($getJwtToken)->token;
                                echo json_encode($response);
                            }catch(e){
                                error_log_auth();
                            }
                         }else {
                            error_log_auth();
                         }
                    }
                }elseif ($action =='csrf' && isset($_GET['tokenType']) && $_GET['tokenType']=='MIT') {
                    if ($this->isValidUserToken()) {
                        ob_start();
                        $jsonString = file_get_contents("php://input");
                        $phpObject = json_decode($jsonString);
                        $newobjt = json_encode($phpObject);
                        $_token = new Http\sanctum();
                        $token = $_token->getToken();
                        if($token){
                            $response['status'] = http_response_code(200);
                            $response['_token']= $token;
                        }
                        ob_end_clean();   
                        echo json_encode($response);
                    }
                } elseif ($action =='items') {
                    if ($this->isValidUserToken()) {
                        $response = [];
                        $response['_items']= $this->_fetching_sql_model_data->get_user_subcribed_subjects();
                        echo json_encode($response);
                    }
                } elseif ($action == 'search') {
                    if ($this->isValidUserToken()) {
                        ob_start(); 
                        $jsonString = file_get_contents("php://input");
                        $response = array();
                        $phpObject = json_decode($jsonString);
                        $search_data=$phpObject->{'_data'}; 
                        $newobjt = json_encode($phpObject);
                        $search_requested_in_data=$this->_fetching_sql_model_data->get_search($search_data);
                        if($search_requested_in_data){
                            $response['inc']=true;
                            $response['data']= $search_data;
                            $response['status'] = http_response_code(200);
                        }else {
                            $response['status'] = http_response_code(200);
                            $response['inc']=false;
                            $response['data'] ='No matches for '.$search_data.' ';
                            $response['error']='';
                        }
                        ob_end_clean();
                        $this->returning_page($response);
                    }
                }elseif ($action == 'renderresults') {
                    if ($this->isValidUserToken()) {
                        $authClass= new Auth\authentication;
                        $authenticateUser = $authClass->auth_check();
                        if (!$authenticateUser) {
                            redirect('auth/login');
                        }else{
                            $_token = $_GET['encrypted'];
                            $data_request = strip_tags(trim(filter_var($_GET['data'], FILTER_SANITIZE_STRING)));
                            $search_post_data = $this->_fetching_sql_model_data->get_search($data_request);
                            if($search_post_data != ""){
                                $data = ['data'=>$search_post_data];
                                $this->view("components/apiHeader", $data);
                            }
                        }
                    }
                }elseif ($action == 'subjects' && isset($_GET['filter']) && $_GET['filter']=='subjectsOnly') {
                    if ($this->isValidUserToken()) {
                        $authClass= new Auth\authentication;
                        $authenticateUser = $authClass->auth_check();
                        if (!$authenticateUser) {
                            redirect('auth/login');
                        }else{
                            $data_request = strip_tags(trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING)));
                            $search_post_data = $this->_fetching_sql_model_data->getsubjects($data_request);
                            if($search_post_data != ""){
                                $data = ['data'=>$search_post_data];
                                $this->view("components/apiHeader", $data);
                            }
                        }
                    }
                }elseif ($action == 'journals' && isset($_GET['filter']) && $_GET['filter']=='journalsOnly') {
                    if ($this->isValidUserToken()) {
                        $authClass= new Auth\authentication;
                        $authenticateUser = $authClass->auth_check();
                        if (!$authenticateUser) {
                            redirect('auth/login');
                        }else{
                            $_token = $_POST['encrypted'];
                            $data_request = strip_tags(trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING)));
                            $search_post_data = $this->_fetching_sql_model_data->getjournals($data_request);
                            if($search_post_data != ""){
                                $data = ['data'=>$search_post_data];
                                $this->view("components/apiHeader", $data);
                            }
                        }
                    }
                }elseif ($action == 'getCategoryListOnparent' && isset($_GET['getCategoryList']) && isset($_GET['library']) && isset($_GET['subject'])) {
                    if ($this->isValidUserToken()) {
                        $authClass= new Auth\authentication;
                        $authenticateUser = $authClass->auth_check();
                        if (!$authenticateUser) {
                            redirect('auth/login');
                        }else{
                            $lib = $_GET['library'];
                            $id=strip_tags(trim(filter_var($_GET['subject'], FILTER_SANITIZE_STRING)));
                            $get_categories_List_Result = $this->_fetching_sql_model_data->get_subject_info($id);
                            if (!empty($get_categories_List_Result)) {
                                $response['data'] = $get_categories_List_Result;
                                $response['status']= http_response_code(200);
                            }else {
                                $response['status']= http_response_code(403);
                            }
                            echo json_encode($response);
                        }
                    }
                }elseif ($action == 'getCategoryListOnparentChild' && isset($_GET['getbookcaseList']) && isset($_GET['library']) && isset($_GET['subject']) && isset($_GET['bookcases'])) {
                    if ($this->isValidUserToken()) {
                        $authClass= new Auth\authentication;
                        $authenticateUser = $authClass->auth_check();
                        if (!$authenticateUser) {
                            redirect('auth/login');
                        }else{
                            $id = strip_tags(trim(filter_var($_GET['bookcases'], FILTER_SANITIZE_STRING)));
                            $cat_id = strip_tags(trim(filter_var($_GET['bookcases'], FILTER_SANITIZE_STRING)));
                            $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_bookshalves_info($cat_id, $id);
                            if (!empty($get_bookshalvesinfo)) {
                                $response['data'] = $get_bookshalvesinfo;
                                $response['status']= http_response_code(200);
                            }else {
                                $response['status']= http_response_code(403);
                            }
                            echo json_encode($response);
                        }   
                    }
                }
                elseif (isset($_GET['getall']) && $_GET['getall'] && isset($_GET['token']) && !isset($_GET['getcraft'])) {
                    if ($this->isValidUserToken()) {
                        if (is_numeric($_GET['library']) && is_numeric($_GET['subject']) ) {
                            $package= (trim((int)$_GET['library']));
                            $subject= (trim((int)$_GET['subject']));
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $itemsPerPage = 40;
                            $offset = ($page - 1) * $itemsPerPage;
                            $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_all_journal_by_category($package, $subject, $offset, $itemsPerPage);
                            $activate_bookcases_sidebar = true;
                            if (!empty($get_bookshalvesinfo)) {
                                $response['status']=http_response_code(200);
                                $response['_items']=$get_bookshalvesinfo;
                                echo json_encode($response);
                            }
                        }
                    }
                }elseif (isset($_GET['getbookcases']) && isset($_GET['library']) && isset($_GET['subject']) && isset($_GET['bookcases']) && !isset($_GET['bookshelves'])) {
                    if ($this->isValidUserToken()) {
                        $package= (trim((int)$_GET['library']));
                        $subject= (trim((int)$_GET['subject']));
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $itemsPerPage = 40;
                        $offset = ($page - 1) * $itemsPerPage;
                        $category_as_bookcases=$_GET['bookcases'];
                        $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_journal_on_bookcase($package, $subject, $category_as_bookcases, $offset, $itemsPerPage);
                        $activate_bookcases_sidebar = true;
                        if (!empty($get_bookshalvesinfo)) {
                            $response['status']=http_response_code(200);
                            $response['_items']=$get_bookshalvesinfo;
                            echo json_encode($response);
                        }
                    }
                }elseif (isset($_GET['getcraft']) && isset($_GET['bookcases']) && isset($_GET['bookshelves']) && $_GET['getcraft'] ==true && !isset($_GET['getall'])) {
                    if ($this->isValidUserToken()) {
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $itemsPerPage = 40;
                        $package= (trim((int)$_GET['library']));
                        $subject= (trim((int)$_GET['subject']));
                        $offset = ($page - 1) * $itemsPerPage;
                        $bookshelvesid= $_GET['bookshelves'];
                        $category_as_bookcases=$_GET['bookcases'];
                        $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_journal_on_bookshelves($package, $subject, $category_as_bookcases, $bookshelvesid, $offset, $itemsPerPage);
                        $activate_bookcases_sidebar = true;
                        if (!empty($get_bookshalvesinfo)) {
                            $response['status']=http_response_code(200);
                            $response['_items']=$get_bookshalvesinfo;
                            echo json_encode($response);
                        }
                    }
                }else if ($action== 'getAllJournal' && isset($_GET['getall']) && $_GET['getall'] && isset($_GET['token']) && !isset($_GET['getcraft'])) {
                    if ($this->isValidUserToken()) {
                        if (is_numeric($_GET['library']) && is_numeric($_GET['subject']) ) {
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $itemsPerPage = 40;
                            $offset = ($page - 1) * $itemsPerPage;
                            $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_all_journal_by_category($formattedUid,$formattedUuid, $package, $subject, $offset, $itemsPerPage);
                            $activate_bookcases_sidebar = true;
                            if (!empty($get_bookshalvesinfo)) {
                                $response['status']=http_response_code(200);
                                $response['_items']=$get_bookshalvesinfo;
                                echo json_encode($response);
                            }
                        }
                    }
                }
            }
        }else {
            error_log_auth();
        }       
   }
}

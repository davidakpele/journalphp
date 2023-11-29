<?php
use Http\sanctum;
use Ramsey\Uuid\Uuid;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;
use Auth\{authentication};
use JwtHttp\{jwtUtil};
use SecurityFilterChainBlock\UrlFilterChain;
use \UserAuthentication\auth;

final class api extends Controller {
    
    private $_fetching_sql_model_data;
    private $_store_sql_model_data;
    private $_delete_sql_model_data;
    private $jwtClassInt;
    private $jwtKey;

    public function __construct() {
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

                    $jwt_post = $_SESSION['jwtauth'];
                    // $jwt_post = str_replace('Bearer ', '', $authHeader);
                    
                    $decoded = JWT::decode($jwt_post, new Key($this->jwtKey, 'HS256'));
                    $iss = $decoded->email;
                    $aud = $decoded->package;
                    $iat = $decoded->subscription_token;
                    $nbf = $decoded->exp;

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
    
    public function returning_page($response){
        switch ($response['inc']) {
            case false:
                break;
            default:
                $data = ['result' => $response];
                break;
        }
        echo json_encode($response);
    }

    public function is_connect(){
        if(isset($_GET['token']) && !empty($_GET['token']) && is_numeric($_GET['id'])){
            $id = strip_tags(trim($_GET['id'], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT));
            $_filter_=$this->_fetching_sql_model_data->get_connection_table($id);
            echo json_encode($_filter_);
        }
    }

    public function _is_connected(): bool{ 
        return isset($_SESSION["user"]);
    }
    
    public function isAuthenticated(){
        if (isset($_SESSION['jwtauth'])) {
            return array(
                'jwt'=>$_SESSION['jwtauth']
            );
        }else {
            error_log_auth();
        }
    }
    public function collect(){
        $response = [];
        // This request appears to be from a web browser
        if (isset($_GET['iat']) && isset($_GET['action'])) {
            $action = $_GET['target'];
            if (isset($_GET['target'])) { 
                if ($action=='central' && isset($_GET['v2']) && $_GET['v2']=='rgstr') {
                    $authClass= new authentication;
                    $authenticateUser = $authClass->auth_check();
                    if (!$authenticateUser) {
                        $response['authencation']=http_response_code(401);
                        redirect('auth/login');
                    }else{
                        try{ 
                            $init = new sanctum();
                            $JwtRefreshTokenresponse = $init->collections();
                            $response['v']= $JwtRefreshTokenresponse['responses']['token'];
                            $_SESSION['jwtauth']= $JwtRefreshTokenresponse['responses']['token'];
                            $response['data'] = [
                                'cursor'=>'', 
                                'api'=>[
                                    'aot'=>[
                                        'imprint'=>'micro-lock-down', 
                                        'syphine'=>[
                                            '64-bit-encryption'
                                        ], 
                                        'access'=>[
                                            'Open-window 182.562.32.0.1 -Alpha#Bravo2romio?cell49'
                                            ]
                                            ]
                                        ], 
                                        'asyc'=>strlen('http.headers'), 
                                        'post_add'=>getmypid(), 
                                        '_apd'=>ip2long($_SERVER['SERVER_ADDR'])
                                    ];
                            echo json_encode($response);
                        }catch(e){
                            error_log_auth();
                        }
                       
                    }
                }elseif ($action =='csrf' && isset($_GET['tokenType']) && $_GET['tokenType']=='micro') {
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
                        //get 'user subscription id'
                        $id= $_SESSION['packageId'];
                        $response['_items']= $this->_fetching_sql_model_data->get_user_subcribed_subjects($id);
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
                        $authClass= new authentication;
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
                        $authClass= new authentication;
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
                        $authClass= new authentication;
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
                        $authClass= new authentication;
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
                        $authClass= new authentication;
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
                            $itemsPerPage = 50;
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
                        $itemsPerPage = 50;
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
                        $itemsPerPage = 50;
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
                            $itemsPerPage = 50;
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

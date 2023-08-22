<?php
use Http\{sanctum}; 
use Ramsey\Uuid\Uuid;
final class api extends Controller {
    
    private $_fetching_sql_model_data;
    private $_store_sql_model_data;
    private $_delete_sql_model_data;
    
    public function __construct() 
    {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
       @$this->_store_sql_model_data = @$this->loadModel('Store');
       @$this->_delete_sql_model_data = $this->loadModel('Delete');
    }
  

    public function csrf_token()
    {
        if(validata_api_request_header()){
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
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
   }

    public function getsearch()
    {
        if(validata_api_request_header()){
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);

            $search_data=$phpObject->{'_data'};

            $newobjt = json_encode($phpObject);
            $search_requested_in_data=$this->_fetching_sql_model_data->get_search($search_data);
            if($search_requested_in_data == true){
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
   }

    public function returning_page($response)
    {
        if($response['inc'] == false){
            echo json_encode($response);
        }else{
            $data=['result'=>$response];
            echo json_encode($response);
        }
    }


    public function is_connect()
    {
        if(isset($_GET['token']) && !empty($_GET['token']) && is_numeric($_GET['id'])){
            $id = strip_tags(trim($_GET['id'], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT));
            $_filter_=$this->_fetching_sql_model_data->get_connection_table($id);
            echo json_encode($_filter_);
        }
    }

    public function _is_connected()
    { 
        return isset($_SESSION["user"]) ? TRUE : FALSE ;
    }

    public function items()
    {
        if (isset($_GET['token'])) {
            $uuid = Uuid::uuid4(); 
            $uuidString = $uuid->toString(); 
            // Format the UUID in the desired pattern
            $formattedUid = sprintf(
                '%08s-%04s-%04s-%04s-%012s',
                substr($uuidString, 0, 8),
                substr($uuidString, 9, 4),
                substr($uuidString, 14, 4),
                substr($uuidString, 19, 4),
                substr($uuidString, 24)
            );
            $response = [];
            $response['token']=$formattedUid;
            $response['_items']= $this->_fetching_sql_model_data->get_user_subcribed_subjects();
            $response['status']=http_response_code(200);
        }else {
           $response['error']= error_log_auth();
        }
        echo json_encode($response);
    }

    public function apicontext()
    { 
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
            $package= strip_tags(trim($_GET['library'], FILTER_VALIDATE_INT));
            $subject= strip_tags(trim((int)$_GET['subject'], FILTER_VALIDATE_INT));
            if (isset($_GET['getall']) && $_GET['getall'] == true && isset($_GET['token']) && !isset($_GET['getcraft'])) {
                if (is_numeric($_GET['library']) && is_numeric($_GET['subject']) ) {
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $itemsPerPage = 40;
                    $offset = ($page - 1) * $itemsPerPage;
                    $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_all_journal_by_category($formattedUid,$formattedUuid, $package, $subject, $offset, $itemsPerPage);
                    $activate_bookcases_sidebar = true;
                    if (!empty($get_bookshalvesinfo)) {
                        $response['status']=http_response_code(200);
                        $response['_items']=$get_bookshalvesinfo;
                    }
                
                }
            }elseif (isset($_GET['getbookcases']) && isset($_GET['library']) && isset($_GET['subject']) && isset($_GET['bookcases']) && !isset($_GET['bookshelves'])) {
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
            elseif (isset($_GET['getcraft']) && isset($_GET['bookcases']) && isset($_GET['bookshelves']) && $_GET['getcraft'] ==true && !isset($_GET['getall'])) {
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $itemsPerPage = 40;
                $offset = ($page - 1) * $itemsPerPage;
                $bookshelvesid= $_GET['bookshelves'];
                $category_as_bookcases=$_GET['bookcases'];
                
                $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_journal_on_bookshelves($formattedUid,$formattedUuid, $package, $subject, $category_as_bookcases, $bookshelvesid, $offset, $itemsPerPage);
                $activate_bookcases_sidebar = true;
                if (!empty($get_bookshalvesinfo)) {
                    $response['status']=http_response_code(200);
                    $response['_items']=$get_bookshalvesinfo;
                }
            }
        }else {
           $response['status']=http_response_code(301);
        }
       
        echo json_encode($response);
    }
}

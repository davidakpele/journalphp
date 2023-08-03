<?php
use Http\{sanctum}; 

final class api extends Controller {
    
    private $_fetching_sql_model_data;
    private $_store_sql_model_data;
    private $_delete_sql_model_data;
    
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
       @$this->_store_sql_model_data = @$this->loadModel('Store');
       @$this->_delete_sql_model_data = $this->loadModel('Delete');
    }
    
    public function csrf_token(){
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

    public function getsearch(){
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

    public function returning_page($response){
        if($response['inc'] == false){
            echo json_encode($response);
        }else{
            $data=['result'=>$response];
            //$this->view("components/apiHeader", $data);
            echo json_encode($response);
        }
    }


    public function is_connect(){
        if(isset($_GET['token']) && !empty($_GET['token']) && is_numeric($_GET['id'])){
            $id = strip_tags(trim($_GET['id'], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT));
            $_filter_=$this->_fetching_sql_model_data->get_connection_table($id);
            echo json_encode($_filter_);
        }
    }

    
 
}

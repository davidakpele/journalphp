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
                $response['status'] = 200;
                $response['_token']= $token;
            }
            ob_end_clean();
           echo json_encode($response);
        }
       
       
    }

    
}

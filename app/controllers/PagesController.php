<?php
use Http\{sanctum}; 

final class PagesController extends Controller {
    
    private $_fetching_sql_model_data;
    private $_store_sql_model_data;
    private $_delete_sql_model_data;
    
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
       @$this->_store_sql_model_data = @$this->loadModel('Store');
       @$this->_delete_sql_model_data = $this->loadModel('Delete');
    }
    
    public function index(){
        $_token = new Http\sanctum();
        $token = $_token->getToken();
        $data =
        [
            '_token'=>$token
        ];
        $this->view("index", $data);
    }

    
}

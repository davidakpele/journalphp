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
    
    public function clone(){
        
        $search = trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING));
        $_token = $_POST['encrypted'];
        if($search != ""){
            $this->view("components/apiHeader");
        }
    }


    public function Login(){

        $this->view("auth/Login");
    }


    public function lookup(){

        $this->view("lookup/Find_institute");
    }
}

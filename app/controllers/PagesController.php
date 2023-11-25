<?php
use Http\{sanctum}; 
use Ramsey\Uuid\Uuid;
use Firebase\JWT\JWT;
use Auth\{authentication};
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
        $authClass= new Auth\authentication;
        $authenticateUser = $authClass->auth_check();
        if (!$authenticateUser) {
            redirect('auth/login');
        }else{
            $_token = new Http\sanctum();
            $token = $_token->getToken();
            //get 'user subscription id'
            $id= $_SESSION['packageId'];
            $_get_avaliable_subject= $this->_fetching_sql_model_data->get_user_subcribed_subjects($id);
            $data =
            [
                'auth'=>($authenticateUser ?? ''),
                '_token'=>$token,
                'data'=> $_get_avaliable_subject,
            ];
            $this->view("index", $data); 
        }       
    }

    public function journals(){
        $authClass= new Auth\authentication;
        $authenticateUser = $authClass->auth_check();
        if (!$authenticateUser) {
            redirect('auth/login');
        }else{
            $this->view("libraries/journal");
        }
    }

    public function subject(){
        $authClass= new Auth\authentication;
        $authenticateUser = $authClass->auth_check();
        if (!$authenticateUser) {
            redirect('auth/login');
        }else{
            $this->view("libraries/subject");
        }
    }
    
    public function lookup(){
        $this->view("en/Find_institute");
    }

    public function ebooks(){
        $this->view("en/e-Books");
    }
}

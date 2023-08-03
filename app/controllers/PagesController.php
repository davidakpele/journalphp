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
        $_get_avaliable_subject= $this->_fetching_sql_model_data->get_user_subcribed_subjects();
        $data =
        [
            '_token'=>$token,
            'data'=> $_get_avaliable_subject,
        ];
        $this->view("index", $data);
    }
    
    public function clone(){
        $_token = $_POST['encrypted'];
        $data_request = strip_tags(trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING)));
        $search_post_data = $this->_fetching_sql_model_data->get_search($data_request);
        if($search_post_data != ""){
            $data = ['data'=>$search_post_data];
            $this->view("components/apiHeader", $data);
        }
    }

    public function getsubjects(){
        $_token = $_POST['encrypted'];
        $data_request = strip_tags(trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING)));
        $search_post_data = $this->_fetching_sql_model_data->getsubjects($data_request);
        if($search_post_data != ""){
            $data = ['data'=>$search_post_data];
            $this->view("components/apiHeader", $data);
        }
    }

    public function getjournals(){
        $_token = $_POST['encrypted'];
        $data_request = strip_tags(trim(filter_var($_POST['data'], FILTER_SANITIZE_STRING)));
        $search_post_data = $this->_fetching_sql_model_data->getjournals($data_request);
        if($search_post_data != ""){
            $data = ['data'=>$search_post_data];
            $this->view("components/apiHeader", $data);
        }
    }


    public function Login(){

        $this->view("auth/Login");
    }


    public function lookup(){

        $this->view("lookup/Find_institute");
    }


    public function journals(){
        //first check if user token has access to this journal
        /**
         * <?=ROOT?>libraries/{packeage user subscribe to}/journals/{journal id}/issues/current?sort=title
         * example: <?=ROOT?>/libraries/603/journals/3537/issues/current?sort=title
         */
        $this->view("libraries/journal");
    }


    public function subject(){

        $this->view("libraries/subject");
    }
}

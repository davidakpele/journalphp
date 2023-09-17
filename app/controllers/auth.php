<?php 
use Auth\{authentication};

final class auth extends Controller
{
    private $_store_sql_model_data;

    public function __construct() {
       @$this->_retrieve_sql_model_data = @$this->loadModel('Getting');
    }

    public function index(){
        $authClass= new Auth\authentication;
        $authenticateUser = $authClass->auth_check();
        if (!$authenticateUser) {
            $data=
            [
                'isInLoginMethod'=> true
            ];
            $this->view("auth/Login", $data);
        }else{
            redirect('Default/');
        }
    }
    public function loginuser(){
        $responses = [];
        if(!validata_api_request_header()){
            $response['message'] = error_log_auth();
        }else{
            if (isset($_SERVER['HTTP_AUTHORIZATION']) || !empty($_SERVER['HTTP_AUTHORIZATION'])) {
                // Get the Authorization header value
                $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
                // Extract the token (Bearer token)
                $Bearer_token = str_replace('Bearer ', '', $authHeader);
        
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $email = strip_tags(trim(filter_var($phpObject->{'_email'}, FILTER_VALIDATE_EMAIL)));
                $password = strip_tags(trim(filter_var($phpObject->{'_password'}, FILTER_SANITIZE_STRING)));
                $newJsonString = json_encode($phpObject);
                $getinfo = $this->_retrieve_sql_model_data->LoginAuth($email, $password);
                if ($getinfo == false) {
                   $response['message']='Invalid credentials provided..!';
                   $response['status']= 203;
                }else{
                    
                    $_SESSION['registered_institution_token']=$getinfo->user_token;
                    $_SESSION['userId']=$getinfo->user_id;
                    $_SESSION['packageId']=$getinfo->package_id;
                    $_SESSION['session_token']=$getinfo->user_token;
                    $response['status']= http_response_code(200);
                }
            }else {
                error_log_auth();
            }
        }
        echo json_encode($response);
    }
    public function logout(){
        $_authClass = new Auth\authentication();
        $responses = array();
        if ($_authClass->close_session()) {
           $responses['message']='Logout successfully.!';
           $responses['status']= http_response_code(200);
        }else{
            $responses['message']='Something went wrong.!';
            $responses['status']= http_response_code(201);
        }
        echo json_encode(['data'=>$responses]);
    }
}

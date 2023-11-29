<?php

namespace SecurityFilterChainBlock;

use \JwtHttp\jwtUtil;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use  Auth\authentication;
/**
 *
 * @return boolean 
 * 
 */

final class UrlFilterChain
{
    private $param;
    private $msg_block;
    private $responses;
    private $jwtKey;

    public function __construct() {
       @$this->jwtKey = PRIVATE_KEY;
    }

    public function protectedChainblock(){
        // check if user is authenticated
        if (!$this->isAuthenticated()) {
            header('HTTP/1.1 401 Unauthorized');
            http_response_code(401);
            $responses = [];
            $responses['messsage']='Unauthorized Access.';
        }else{
            return $this->isValidToken();
        }
    }

    public function isAuthenticated(){
        try {
           $isLog = new authentication();
            if ($isLog->auth_check()) {
                return true;
            }else{
                error_log_auth();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function isValidToken(){
        if(validata_api_request_header()){
            // check for Bearer token in the header
            $headers = apache_request_headers();
            if (isset($_SERVER['HTTP_AUTHORIZATION']) || !empty($_SERVER['HTTP_AUTHORIZATION'])) {
                $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
                $token = str_replace('Bearer ', '', $authHeader); 
                return $this->verifyToken($token);
            }elseif(isset($_SESSION['jwtauth'])){
                $token= $_SESSION['jwtauth'];
                return $this->verifyToken($token);
            }else{
                if (!isset($headers['Authorization']) || !isValidToken($headers['Authorization'])) {
                    http_response_code(403);
                    $responses['messsage']='Forbidden Access.';
                }
                return $responses;
            }
         
        }
    }


    public function verifyToken($token){
        $decoded = JWT::decode($token, new Key($this->jwtKey, 'HS256'));
        if (http_response_code() == 200) {
            header('HTTP/1.1 200 OK');
            $responses['data']=[
                'status'=>'202',
                'token'=>$token
            ];
            return $responses;
        }else{
            // I dont want to throw execption error on token expired, instead if user is authenticated i think user to get a new token 
            $authClass= new jwtUtil;
            $getJwtToken = $authClass::createTokenByUserDetails();
            $newtoken= json_decode($getJwtToken)->token; 
            header('HTTP/1.1 200 Reset Content');
            $responses['data']=[
                'status'=>'205',
                'token'=>$newtoken
            ];
            return $responses;
            
            // header('HTTP/1.1 401 Unauthorized');
            // $ExpiredException=
            // [ 
            //     "status"=> http_response_code(401),
            //     "title"=> "Expired token",
            //     "block_code"=>"Unauthorized Access.",
            //     "detail"=> "Something went wrong with authentication to your SkyBase library access. Seems you're not Unauthorized to acccess skybase Database api.",
            //     "code"=> "generic_authentication_error"
            // ];
	        // echo json_encode($ExpiredException);
        }
    }
}


<?php

namespace Auth;
use \SecurityFilterChainBlock\UrlFilterChain;
 
class authentication{
    public function auth_check(){
        if (isset($_SESSION['registered_institution_token']) && isset($_SESSION['userId']) && isset($_SESSION['packageId'])) {
            return true;
        } else {
            return false;
        }
    }

    public function close_session(){
        unset($_SESSION['registered_institution_token']);
        unset($_SESSION['userId']);
        unset($_SESSION['institution_email']);
        unset($_SESSION['packageId']);
        unset($_SESSION['jwtauth']);
        unset($_SESSION['session_token']);
        session_destroy();
        if (isset($_SESSION['userId']) && isset($_SESSION['packageId']) && isset($_SESSION['registered_institution_token'])) {
            return false;
        }else{
            return true;
        }
    }

    public function refreshToken(){
        $protected_url_verification = new UrlFilterChain();
        $check_authorization_access = $protected_url_verification->protectedChainblock();
        if ($check_authorization_access['data']['status'] == 202 || $check_authorization_access['data']['status'] == 205) {
            http_response_code(200);
            header('HTTP/1.1 200 OK');
            $response['responses']=
            [
                'status'=> 200,
                'token'=>$check_authorization_access['data']['token']
            ];
            return($response);
        }else {
            header('HTTP/1.1 401 Unauthorized');
            http_response_code(401);
        }
    }

}
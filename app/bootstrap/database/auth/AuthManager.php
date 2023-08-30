<?php 

namespace Auth\AuthManager;

final class AuthManager extends Controller
{
    
    public function __construct() {
        parent::__construct();
    }

    private $userToken = array(
        'authToken'=> '0e5a93d0-457b-11ee-8cd8-e442a6933c18',
        'apiEndpoint'
    );

    public function verifyLogin($token, $package){
        
    }
}
    


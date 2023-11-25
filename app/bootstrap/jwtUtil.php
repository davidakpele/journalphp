<?php

namespace JwtHttp;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;

final class jwtUtil  {
    
    private $jwtKey;
    private $isoArray;

    public function __construct() {
       @$this->jwtKey = PRIVATE_KEY;
       @$this->isoArray = [];
    }
    public static function createTokenByUserDetails():string{
        $key = PRIVATE_KEY;
        $email =(isset($_SESSION['institution_email']) && !empty($_SESSION['institution_email'])) ? $_SESSION['institution_email'] : '';
        $ioUToken = (isset($_SESSION['session_token']) && !empty($_SESSION['session_token'])) ? $_SESSION['session_token'] : '' ;
        $package = (isset($_SESSION['packageId']) && !empty($_SESSION['packageId'])) ? $_SESSION['packageId'] : '' ;
       
        // Calculate the expiration timestamp by adding 30 seconds to the current timestamp
        $expirationTimestamp = time() + 30;
        
        // Convert the expiration timestamp to the format you mentioned (e.g., "1357000000")
        $expirationString = (string) $expirationTimestamp;

        $payload = [
            'email' => $email,
            'package' => $package,
            'subscription_token' => $ioUToken,
            'location'=>[
                'JournalSimplifiedTitle'=>'acta medica transilvanica',
            ],
            'expire_on' => $expirationString
        ];
        $jwt = JWT::encode($payload, $key, 'HS256');
        return json_encode(['token' => $jwt]);
    }

    

    public static function isNotValidUserToken():string{
       
        return false;
    }

}

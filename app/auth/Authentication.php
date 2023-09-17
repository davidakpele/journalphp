<?php

namespace Auth;

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
        unset($_SESSION['packageId']);
        unset($_SESSION['session_token']);
        if (isset($_SESSION['userId']) && isset($_SESSION['packageId']) && isset($_SESSION['registered_institution_token'])) {
            return false;
        }else{
            return true;
        }
    }



}
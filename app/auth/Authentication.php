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

}
<?php
namespace SecurityService;
 class securityService {
    // Start or resume the session
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Generate a random CSRF token and store it in the session

     /**
      * @throws \Exception
      */
     public function generateToken(): string
    {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrfToken;
        return $csrfToken;
    }

    // Get the CSRF token from the session or generate a new one if not set

     /**
      * @throws \Exception
      */
     public function getToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = $this->generateToken();
        }
        return $_SESSION['csrf_token'];
    }

    // Validate the CSRF token against the one stored in the session

     /**
      * @throws \Exception
      */
     public function validateToken($userToken): bool
     {
        $storedToken = $this->getToken();
        if ($userToken === $storedToken) {
            return true;
        }
        return false;
    }

    // Generate the HTML hidden input field with the CSRF token

     /**
      * @throws \Exception
      */
     public function generateTokenField(): string
    {
        $csrfToken = $this->getToken();
        return '<input type="hidden" name="csrf_token" value="' . $csrfToken . '">';
    }
}

<?php 

// Accessing the config file
require "../app/core/config.php";
// Accessing the Database file
require "../app/core/database.php";
//Accessing the controller file 
require "../app/core/controller.php";
// Accessing the Application file
require "../app/core/app.php";
// Accessing helpers file
require "../app/helpers/validating.php";
require '../app/helpers/vendor/autoload.php';
require "../app/helpers/JwtHandler.php";    
require_once "../app/helpers/HTTPRoute.php";
require_once "../app/security/SecurityService.php";
require_once "../app/Http/MailService.php";
require_once "../app/bootstrap/sanctum.php";
require_once "../app/auth/Authentication.php";
require '../app/vendor/autoload.php';
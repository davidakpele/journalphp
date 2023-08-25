<?php 
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
/*set Application General Title, Daveloper name and Protocal variables*/
define('App_Title', "SkyBase Journals & e-Books");
define('Developer', 'MidTech');
define('PROTOCAL', $protocol); 

/*set database variables*/
define('DB_TYPE','mysql');
define('DB_NAME','skybase'); 
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
define('DB_CHARSET', 'binary');

/*root and asset paths*/
$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . DIRECTORY_SEPARATOR);
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
define('ROOT', str_replace("app/core/", "", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}
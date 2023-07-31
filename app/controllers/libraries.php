<?php

use Https\sanctum;


final class libraries extends Controller 
{

    public function index(){
        $url=implode('',$_REQUEST);
        $urlParts = explode('/', $url);
        //dnd($urlParts);
        if (!isset($urlParts[1]) || empty($urlParts[1])){
            echo "<script>
                    alert('Invalid URL Request.!');
                    window.location.replace('". ROOT."');
                </script>";
        }else if(is_numeric($urlParts[1])==false){
            echo "<script>
                alert('WRONG DIRECTORY ENTERED..!');
                window.location.replace('". ROOT ."');
            </script>";
        }else{
            if ($urlParts[2]=='download') {
                echo "<script>
                window.location.replace('". ROOT ."mobile');
            </script>";
            }
            if(!isset($urlParts[3]) || empty($urlParts[3])){
                echo "<script>
                    alert('Wrong Request.!');
                    window.location.replace('". ROOT."');
                </script>";
            }else if(is_numeric($urlParts[3])==false){
                echo "<script>
                    alert('Invalid Journal ID Sent..!');
                    window.location.replace('". ROOT ."');
                </script>";
            }else{
                // Set Controller ? 
                $controller = (((!empty($urlParts[3])) ? $urlParts[3] : ROOT.' '));
                $controllerName = $controller;
                $id= trim(filter_var($controllerName, FILTER_SANITIZE_NUMBER_INT));
                define("ID", $id);
                 if (ID==57) {
                    $this->view('art');
                 }elseif (ID==58) {
                    $this->view("History");
                 }elseif (ID==59) {
                    $this->view("philosophy");
                 }elseif (ID==60) {
                    $this->view("biological");
                 }elseif (ID==62) {
                    $this->view("Biomedical");
                 }elseif (ID==61) {
                    $this->view("Earth");
                 }elseif (ID==63) {
                    $this->view("Engineering_and_Technology");
                 }elseif (ID==64) {
                    $this->view("Mathematics");
                 }elseif (ID==65) {
                    $this->view("physics_chemistry");
                 }elseif (ID==66) {
                    $this->view("Business");
                 }elseif (ID==67) {
                    $this->view("Social_science");
                 }
                 elseif (ID==68) {
                    $this->view("Law_and_Legal");
                 }else {
                    $this->view("index");
                 }
                
            }
            
        }
    }
    
}

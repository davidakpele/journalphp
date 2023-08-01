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
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view('art', $data);
                     }else{
                        $data = ['sideline'=>false];
                        $this->view('art', $data);
                     }
                 }elseif (ID==58) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("History", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("History", $data);
                     }
                 }elseif (ID==59) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("philosophy", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("philosophy", $data);
                     }
                 }elseif (ID==60) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("biological", $data);
                    }else {
                        $data = ['sideline'=>false];
                        $this->view("biological", $data);
                    }
                 }elseif (ID==62) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Biomedical", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Biomedical", $data);
                     }
                 }elseif (ID==61) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Earth", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Earth", $data);
                     }
                 }elseif (ID==63) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Engineering_and_Technology", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Engineering_and_Technology", $data);
                     }
                 }elseif (ID==64) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Mathematics", $data);
                      }else {
                        $data = ['sideline'=>false];
                        $this->view("Mathematics", $data);
                      }  
                 }elseif (ID==65) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("physics_chemistry", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("physics_chemistry", $data);
                     }
                 }elseif (ID==66) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Business", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Business", $data);
                     }
                 }elseif (ID==67) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Social_science", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Social_science", $data);
                     }
                 }elseif (ID==68) {
                     if ((isset($urlParts[4]) && is_string($urlParts[4]))) {
                        $data = ['sideline'=>true];
                        $this->view("Law_and_Legal", $data);
                     }else {
                        $data = ['sideline'=>false];
                        $this->view("Law_and_Legal", $data);
                     }
                 }else {
                    $this->view("index");
                 }
                
            }
            
        }
    }
    
}

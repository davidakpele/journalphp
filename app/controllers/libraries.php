<?php

use Https\sanctum;


final class libraries extends Controller 
{

    public function index(){
        $url=implode('',$_REQUEST);
        $urlParts = explode('/', $url);
        //get the package id to check which package user subscribe to
        $_package_id = (((!empty($urlParts[1])) ? $urlParts[1] : ROOT.' '));
        //assuming found user
         if(!empty($urlParts[2])){
            if(((isset($urlParts[2]) && $urlParts[2]=='subjects'))){
                //if the subject id is been tempered with and turn not the id is no longer numeric value, redirect the page, has to be numeric to process the page
                if (isset($urlParts[3]) && !is_numeric($urlParts[3])) {
                    echo "<script>
                            window.location.replace('". ROOT ."');
                        </script>";
                }else {
                    $id= trim($urlParts[3], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT);
                    $data = ['sideline'=>false];
                    $this->view("libraries/subject", $data);
                }
            }elseif ($urlParts[2] == 'journals') {
               
                    $id= trim($urlParts[3], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT);
                    $data = ['sideline'=>false];
                    $this->view("libraries/journal", $data);
            }elseif ($urlParts[2] == 'search') {
                
            }else {
                //if user sent a request to view subject or read a journal, if the url is misspel, it redirect them to home page
                 echo "<script>
                    window.location.replace('". ROOT ."');
                </script>";
            }
        }
          
    }

}

<?php

use Https\sanctum;


final class libraries extends Controller 
{
    private $_fetching_sql_model_data;
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
    }
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
                    $id=strip_tags(trim(filter_var($urlParts[3], FILTER_SANITIZE_STRING)));
                    $get_subject_info = $this->_fetching_sql_model_data->get_subject_info($id);
                    if (isset($urlParts[4])) {
                        switch (@$urlParts[4]){
                            case'bookcases':
                                if(isset($urlParts[5]) && is_numeric($urlParts[5])){
                                    $id = strip_tags(trim(filter_var($urlParts[5], FILTER_SANITIZE_STRING)));
                                    $cat_id = strip_tags(trim(filter_var($urlParts[5], FILTER_SANITIZE_STRING)));
                                    $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_bookshalves_info($cat_id, $id);
                                    $activate_bookcases_sidebar = true;
                                }else {
                                    echo "<script>
                                            window.location.replace('". ROOT ."');
                                        </script>";
                                }
                                break;
                            default:
                                $activate_bookcases_sidebar = false;
                                break;
                        }
                    }
                    if (isset($urlParts[6])) {
                         switch (@$urlParts[6]){
                            case'bookshelves':
                                if(isset($urlParts[7]) && is_numeric($urlParts[7])){
                                    $bookshelvesid = strip_tags(trim(filter_var($urlParts[7], FILTER_SANITIZE_STRING)));
                                    $cat_id = strip_tags(trim(filter_var($urlParts[5], FILTER_SANITIZE_STRING)));
                                    $get_requested_journals = $this->_fetching_sql_model_data->get_journal_on_bookcase_ref($cat_id, $bookshelvesid);
                                    if (isset($_GET['query'])) {
                                        echo "<script>
                                            window.location.replace('". ROOT ."libraries/".$urlParts[1]."/subjects/".$urlParts[3]."/bookcases/".$urlParts[5]."/bookshelves/".$urlParts[7]."/?sort=title');
                                        </script>";
                                    }
                                }else {
                                    echo "<script>
                                            window.location.replace('". ROOT ."');
                                        </script>";
                                }
                                break;
                            default:
                                
                                break;
                        }
                        
                    }
                    $data = ['activate_bookshalves'=>((isset($get_bookshalvesinfo) && (!empty($get_bookshalvesinfo))?$get_bookshalvesinfo:'')), 'sideline'=>$activate_bookcases_sidebar, 'data'=>$get_subject_info];
                    //dnd($data);
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

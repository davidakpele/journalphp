<?php

use Https\sanctum;

use Ramsey\Uuid\Uuid;

final class libraries extends Controller 
{
    private $_fetching_sql_model_data;
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
    }
    public function index(){
        $authClass= new Auth\authentication;
        $authenticateUser = $authClass->auth_check();
        if (!$authenticateUser) {
            redirect('auth/login');
        }else{
            $url=implode('',$_REQUEST);
            $urlParts = explode('/', $url);
            //get the package id to check which package user subscribe to
            $_package_id = (((!empty($urlParts[1])) ? $urlParts[1] : ROOT.' '));
            //assuming found user
            if(!empty($urlParts[2])){
                $uid = Uuid::uuid1();
                $uuid = Uuid::uuid4();
                $uidString = $uid->toString(); 
                $uuidString = $uuid->toString(); // Get the UUID as a string
                // Format the UUID in the desired pattern
                $formattedUid = sprintf(
                    '%08s-%04s-%04s-%04s-%012s',
                    substr($uidString, 0, 8),
                    substr($uidString, 9, 4),
                    substr($uidString, 14, 4),
                    substr($uidString, 19, 4),
                    substr($uidString, 24)
                );
                $formattedUuid = sprintf(
                    '%08s-%04s-%04s-%04s-%012s',
                    substr($uuidString, 0, 8),
                    substr($uuidString, 9, 4),
                    substr($uuidString, 14, 4),
                    substr($uuidString, 19, 4),
                    substr($uuidString, 24)
                );
                if(((isset($urlParts[2]) && $urlParts[2]=='subjects'))){
                    if (isset($urlParts[3]) && !isset($urlParts[5]) && !isset($urlParts[7])) {
                        if (isset($urlParts[3]) && !is_numeric($urlParts[3])) {
                            echo "<script> window.location.replace('". ROOT ."');</script>";
                        }
                        switch (@$urlParts[2]) {
                            case 'subjects':
                                $page = $_GET['page'] ?? 1;
                                $itemsPerPage = 30; // Adjust this based on your needs
                                // Calculate the starting point for your query
                                $offset = ($page - 1) * $itemsPerPage;
                                $package=strip_tags(trim(filter_var($urlParts[1], FILTER_SANITIZE_STRING)));
                                $subject=strip_tags(trim(filter_var($urlParts[3], FILTER_SANITIZE_STRING)));
                                $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_all_journal_by_category($formattedUid, $formattedUuid, $package, $subject, $offset, $itemsPerPage);
                                $activate_bookcases_sidebar = true;
                                if (!empty($get_bookshalvesinfo)) {
                                    $get_journals_reponses=$get_bookshalvesinfo;
                                }
                            
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    }
                    
                    //if the subject id is been tempered with and turn not the id is no longer numeric value, redirect the page, has to be numeric to process the page
                    if (isset($urlParts[3]) && !is_numeric($urlParts[3])) {
                        echo "<script>window.location.replace('". ROOT ."'); </script>";
                    }else {
                        $id=strip_tags(trim(filter_var($urlParts[3], FILTER_SANITIZE_STRING)));
                        $get_subject_info = $this->_fetching_sql_model_data->get_subject_info($id);
                        if (isset($urlParts[4])) {
                            switch (@$urlParts[4]){
                                case'bookcases':
                                    if(isset($urlParts[5]) && is_numeric($urlParts[5])){
                                        $page = $_GET['page'] ?? 1;
                                        $itemsPerPage = 40;
                                        $offset = ($page - 1) * $itemsPerPage;
                                        $package=strip_tags(trim(filter_var($urlParts[1], FILTER_SANITIZE_STRING)));
                                        $subject=strip_tags(trim(filter_var($urlParts[3], FILTER_SANITIZE_STRING)));
                                        $category_as_bookcases=strip_tags(trim(filter_var($urlParts[5], FILTER_SANITIZE_STRING)));
                                        $get_bookshalvesinfo = $this->_fetching_sql_model_data->get_journal_on_bookcase($formattedUid,$formattedUuid, $package, $subject, $category_as_bookcases, $itemsPerPage, $itemsPerPage);
                                        $activate_bookcases_sidebar = true;
                                        if (!empty($get_bookshalvesinfo)) {
                                            $get_journals_reponses=$get_bookshalvesinfo;
                                        }
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
                                    if(isset($urlParts[1]) && is_numeric($urlParts[1]) && isset($urlParts[3]) && is_numeric($urlParts[3]) && isset($urlParts[5]) && is_numeric($urlParts[5]) && isset($urlParts[7]) && is_numeric($urlParts[7])){
                                        $package=strip_tags(trim(filter_var($urlParts[1], FILTER_SANITIZE_STRING)));
                                        $subject=strip_tags(trim(filter_var($urlParts[3], FILTER_SANITIZE_STRING)));
                                        $category_as_bookcases=strip_tags(trim(filter_var($urlParts[5], FILTER_SANITIZE_STRING)));
                                        $bookshelvesid = strip_tags(trim(filter_var($urlParts[7], FILTER_SANITIZE_STRING)));
                                        $page = $_GET['page'] ?? 1;
                                        $itemsPerPage = 40;
                                        $offset = ($page - 1) * $itemsPerPage;
                                        $cid = $urlParts[5];
                                        $bshid = $urlParts[7];
                                        $geturlRelatives= $this->_fetching_sql_model_data->get_header_core($cid, $bshid);
                                        $get_requested_journals = $this->_fetching_sql_model_data->get_journal_on_bookshelves($formattedUid,$formattedUuid,$package, $subject, $category_as_bookcases, $bookshelvesid, $itemsPerPage, $offset);
                                        if (!empty($get_requested_journals)) {
                                        $get_journals_reponses=$get_requested_journals;
                                        }
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
                        
                        if (isset($get_subject_info['subject']) && !empty($get_subject_info['subject']->categories_name) && isset($urlParts[3]) && !isset($urlParts[5]) || isset($urlParts[5]) ==null && !isset($urlParts[8])){
                            $title_name=$get_subject_info['subject']->subjects_name;
                        }elseif (isset($get_bookshalvesinfo['category']) && !empty($get_bookshalvesinfo['category']->categories_name) && isset($urlParts[5]) && !isset($urlParts[8])){
                            $title_name=$get_bookshalvesinfo['category']->categories_name;
                        }elseif (isset($geturlRelatives['url_bookshelves']) && !empty($geturlRelatives['url_bookshelves']->bookshelves_name) && isset($urlParts[5]) && isset($urlParts[8])){
                            $title_name= $geturlRelatives['url_bookshelves']->bookshelves_name;
                        }
                        $data =
                        [
                            'page_title'=>(empty($title_name) ? '' : $title_name),
                            'j'=>((isset($get_journals_reponses))?$get_journals_reponses:''),
                            'activate_bookshalves'=>(((!empty($get_bookshalvesinfo)) ?$get_bookshalvesinfo:'')),
                            'sideline'=>($activate_bookcases_sidebar ?? ''),
                            'data'=>$get_subject_info,
                            'url'=>((isset($geturlRelatives))?$geturlRelatives:'')
                        ];
                        $this->view("libraries/subject", $data);
                    }
                }elseif ($urlParts[2] == 'journals') {
                        if (isset($urlParts[3]) && is_numeric($urlParts[3])) {
                            $id = strip_tags($urlParts[3], FILTER_SANITIZE_STRING && FILTER_SANITIZE_SPECIAL_CHARS && FILTER_SANITIZE_NUMBER_INT);
                            $get_journal_request = $this->_fetching_sql_model_data->get_single_journal_on_Request($id);
                            $data =
                                [
                                    'sideline' => false,
                                    'render_journal' => (!empty($get_journal_request) ? $get_journal_request : ''),
                                ];
                            $this->view("libraries/journal", $data);
                        }else{
                            echo "<script>
                                window.location.replace('". ROOT ."');
                            </script>";
                        }
                }elseif ($urlParts[2] == 'search') {
                if (isset($_GE['q']) && isset($_GET['search']))
                    $search_input = $_GET['q'];
                }else {
                    //if user sent a request to view subject or read a journal, if the url is misspel, it redirect them to home page
                    echo "<script>
                        window.location.replace('". ROOT ."');
                    </script>";
                }
            }
        }
    }

}
<?php 
final class form extends Controller
{
    private $_fetching_sql_model_data;
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
    }
    public function index(){
        if (isset($_POST['submit'])) {
            $_SESSION['registered_institution_token']='8779898';
            $_SESSION['userId']="300";
            $_SESSION['packageId']='603';
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           if (is_uploaded_file($_FILES['file']['tmp_name'])){
            if (isset($_FILES['file']['name']) != ''){
                $photo = $_FILES['file'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $imgType = $photo['type'];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 

                $bookshelvesid=$_POST['bookshelvesid'];
                $categorieid=$_POST['categorieid'];
                $journal_name=$_POST['journal_name'];
                if (empty($bookshelvesid) || empty($categorieid) || empty($journal_name)) {
                   echo "All feilds requireds.*";
                   return false;
                }
                // $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = uniqid().'.'.$fileExt;
                $uploadPath = 'assets/images/jn/art/'.trim(filter_var(date("d-m-Y"), FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     = 'assets/images/jn/art/'.trim(filter_var(date("d-m-Y"), FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'assets/images/jn/art/'.trim(filter_var(date("d-m-Y"), FILTER_SANITIZE_STRING));
                if ($fileSize > 90000000000000) {
                    $response['status'] = 300;
                    $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                }elseif ($fileSize < 90000000000000 ) {
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
                    }
                       
                      
                        move_uploaded_file($tmpLoc,$dbpath);
                        if ($this->_fetching_sql_model_data->__saveLogoChanges($bookshelvesid,$categorieid,$journal_name,$imgType,$uploadPath)) {
                            echo 'Uploaded Successfully';
                        } 
                    }
                }
           }else{
            echo "Please select a valid image.";
            die();
           }
        }
         $getcategories = $this->_fetching_sql_model_data->_selectCategories();
         $getbookshalves = $this->_fetching_sql_model_data->_selectBookshelves();
         $data=['cat'=>$getcategories, 'book'=>$getbookshalves];
        $this->view("form", $data);
    }
}

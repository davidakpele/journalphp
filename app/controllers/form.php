<?php 
final class form extends Controller
{
    private $_fetching_sql_model_data;
    public function __construct() {
       @$this->_fetching_sql_model_data = @$this->loadModel('Getting');
    }
    public function index(){
        if (isset($_POST['submit'])) {
            
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           if (is_uploaded_file($_FILES['file']['tmp_name'])){
            if (isset($_FILES['file']['name']) != ''){
                $photo = $_FILES['file'];
                $imgType = $_FILES['file']['type'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                $uploadName = uniqid().'.'.$fileExt;

                $bookshelvesid=$_POST['bookshelvesid'];
                $categorieid=$_POST['categorieid'];
                $journal_name=$_POST['journal_name'];
                if (empty($bookshelvesid) || empty($categorieid) || empty($journal_name)) {
                   echo "All feilds requireds.*";
                   return false;
                }

                $uploadPath =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING));
                    if ($fileSize > 90000000000000) {
                        $response['status'] = 300;
                        $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                    }elseif ($fileSize < 90000000000000 ) {
                        
                        if(!file_exists($folder)){
                            mkdir($folder,077,true);
                        }
                        foreach(glob($folder . '/*') as $file){
                            // check if file older than 90 days
                            if((time() - filemtime($file)) > (60 * 60 * 24 * 90)){
                                unlink($file);
                            }else {
                                // delete file
                                unlink($file);
                            }
                        }
                         
                        move_uploaded_file($tmpLoc,$dbpath);
                        if ($this->_fetching_sql_model_data->__saveLogoChanges($bookshelvesid,$categorieid,$journal_name,$imgType,$tmpLoc)) {
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

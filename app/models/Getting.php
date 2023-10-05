<?php
    class Getting
    {

        private $_connect_db;
        public function __construct(){
            $this->_connect_db = new Database;
        }
         
        public function get_search($data_request){
            $data =[];
            $user_subcribed_package_id = $_SESSION['packageId'];
            $this->_connect_db->query(/** @lang text */"SELECT a.*, b.packageid  FROM subjects a INNER JOIN package b ON b.packageid=a.package_id WHERE a.package_id=:user_subcribed_package_id AND subjects_name LIKE '%$data_request%' OR subjects_name LIKE  '%$data_request' OR subjects_name LIKE '$data_request%' OR subjects_name LIKE '_$data_request%' OR subjects_name LIKE '$data_request _%' GROUP BY subjects_name ORDER BY RAND()");
            $this->_connect_db->bind(":user_subcribed_package_id", $user_subcribed_package_id);
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            $this->_connect_db->query(/** @lang text */"SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' OR journal_name LIKE '%$data_request' OR journal_name LIKE '$data_request%' OR journal_name LIKE '_$data_request%' OR journal_name LIKE '$data_request _%' GROUP BY journal_name  ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();
          
            $this->_connect_db->query(/** @lang text */"SELECT a.*, b.subjectid, b.categoriesid,  c.subjectid, c.package_id,  e.packageid  FROM bookshelves a  INNER JOIN categories b  ON a.categoriesid= b.categoriesid  INNER JOIN subjects c   ON c.subjectid = b.subjectid  INNER JOIN package e  ON e.packageid=c.package_id  WHERE bookshelves_name   LIKE '%$data_request%'   OR bookshelves_name   LIKE '%$data_request'   OR bookshelves_name   LIKE '$data_request%'  OR bookshelves_name  LIKE '_$data_request%'  OR bookshelves_name  LIKE '$data_request _%' GROUP BY bookshelves_name ORDER BY RAND()");
            $data[]['bookshelves']= $this->_connect_db->resultSet();

            if (!empty($data)) {
                $mergin_Array_result= array_merge($data[0]['subjects'], $data[1]['journals'], $data[2]['bookshelves']);
                if ($mergin_Array_result !=null) {
                    return $data; 
                }else{
                    return false;
                }
            }else {
                return false;
            }
        }

        public function getsubjects($data_request){
            $data =[];
            $this->_connect_db->query(/** @lang text */"SELECT *  FROM subjects WHERE subjects_name LIKE '%$data_request%' OR subjects_name LIKE '%$data_request' OR subjects_name LIKE '$data_request%' OR subjects_name LIKE '_$data_request%' OR subjects_name LIKE '$data_request _%' GROUP BY subjects_name ORDER BY RAND()");
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            $this->_connect_db->query(/** @lang text */"SELECT a.*, b.subjectid, b.categoriesid, c.subjectid, c.package_id, e.packageid  FROM bookshelves a INNER JOIN categories b ON a.categoriesid= b.categoriesid INNER JOIN subjects c  ON c.subjectid = b.subjectid INNER JOIN package e ON e.packageid=c.package_id WHERE bookshelves_name  LIKE '%$data_request%'  OR bookshelves_name  LIKE '%$data_request'  OR bookshelves_name  LIKE '$data_request%' OR bookshelves_name LIKE '_$data_request%' OR bookshelves_name LIKE '$data_request _%' GROUP BY bookshelves_name ORDER BY RAND()");
            $data[]['bookshelves']= $this->_connect_db->resultSet();
            if (!empty($data)) {
                return $data;
            }else {
                return false;
            }
        }

        public function getjournals($data_request){
            $data =[];
            $this->_connect_db->query(/** @lang text */"SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' OR journal_name LIKE '%$data_request' OR journal_name LIKE '$data_request%' OR journal_name LIKE '_$data_request%' OR journal_name LIKE '$data_request _%'  GROUP BY journal_name ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();

            if (!empty($data)) {
                return $data;
            }else {
                return false;
            }
        }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_connection_table($id){
        $data =[];
        $this->_connect_db->query(/** @lang text */"SELECT a.packageid,  b.subjectid, b.package_id,  c.subjectid, c.categoriesid, d.bookshelvesid, d.categoriesid FROM package a  INNER JOIN subjects b  ON b.package_id=a.packageid  INNER JOIN categories c  ON c.subjectid=b.subjectid INNER JOIN bookshelves d  ON d.categoriesid=c.categoriesid WHERE c.categoriesid=:id OR d.bookshelvesid =:id LIMIT 1");
        $this->_connect_db->bind(':id', $id);
        $data['data']= $this->_connect_db->single();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_user_subcribed_subjects(){
        $user_subcribed_package_id = $_SESSION['packageId'];
        $this->_connect_db->query(/** @lang text */"SELECT subjectid,package_id,subjects_name FROM `subjects` WHERE package_id=:user_subcribed_package_id");
        $this->_connect_db->bind(':user_subcribed_package_id', $user_subcribed_package_id);
        $data = $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    /** @noinspection PhpVoidFunctionResultUsedInspection */
        public function get_subject_info($id){
        $data =[];
        $this->_connect_db->query(/** @lang text */"SELECT * FROM `subjects` WHERE subjectid=:id");
        $this->_connect_db->bind(':id', $id);
        $data['subject']= $this->_connect_db->single();

        $this->_connect_db->query(/** @lang text */"SELECT a.*, b.subjectid FROM categories a INNER JOIN subjects b ON a.subjectid=b.subjectid WHERE b.subjectid =:id");
        $this->_connect_db->bind(':id', $id);
        $data['data']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_bookshalves_info($cat_id, $id){
        $data =[];
        
        $this->_connect_db->query(/** @lang text */"SELECT * FROM `categories` WHERE categoriesid =:cat_id");
        $this->_connect_db->bind(':cat_id', $cat_id);
        $data['category']= $this->_connect_db->single();

        $this->_connect_db->query(/** @lang text */"SELECT a.*, b.subjectid,b.categoriesid, c.subjectid, c.package_id FROM bookshelves a INNER JOIN categories b  ON a.categoriesid=b.categoriesid INNER JOIN subjects c ON c.subjectid =b.subjectid WHERE b.categoriesid =:id");
        $this->_connect_db->bind(':id', $id);
        $data['bookcases']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

   /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_journal_on_bookcase($package, $subject, $category_as_bookcases, $offset, $itemsPerPage){
        $data = [];
        // set the default timezone to use.
        date_default_timezone_set('UTC');
        $this->_connect_db->query(/** @lang text */"SELECT p.packageid, s.subjectid, s.package_id, c.subjectid, c.categoriesid, jn.*  FROM package p  INNER JOIN subjects s ON s.package_id=p.packageid  INNER JOIN categories c ON c.subjectid=s.subjectid  INNER JOIN journals jn ON jn.categoryid= c.categoriesid  WHERE p.packageid=:package  AND c.categoriesid=:category_as_bookcases  AND s.subjectid=:subject  GROUP BY jn.journal_name ASC LIMIT :offset, :itemsPerPage");
        $this->_connect_db->bind(':package', $package);
        $this->_connect_db->bind(':subject', $subject);
        $this->_connect_db->bind(':offset', $offset);
        $this->_connect_db->bind(':itemsPerPage', $itemsPerPage);
        $this->_connect_db->bind(':category_as_bookcases', $category_as_bookcases);
        $data['data']['journalList']= $this->_connect_db->resultSet();
        $data['rowCount']=$this->_connect_db->rowCount();
        if (!empty($data)) {
           return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_journal_on_bookshelves($package, $subject, $category_as_bookcases, $bookshelvesid, $offset, $itemsPerPage){
        $data = [];
        // set the default timezone to use.
        date_default_timezone_set('UTC');
        $this->_connect_db->query(/** @lang text */"SELECT p.packageid, s.subjectid, s.package_id, c.subjectid, c.categoriesid, bsh.categoriesid, bsh.bookshelvesid, jn.* FROM package p INNER JOIN subjects s ON s.package_id=p.packageid INNER JOIN categories c ON c.subjectid=s.subjectid INNER JOIN bookshelves bsh ON bsh.categoriesid=c.categoriesid INNER JOIN journals jn ON jn.bookshelvesid= bsh.bookshelvesid WHERE jn.bookshelvesid =:bookshelvesid AND bsh.bookshelvesid=:bookshelvesid AND p.packageid=:package AND c.categoriesid=:category_as_bookcases AND s.subjectid=:subject GROUP BY jn.journal_name ASC LIMIT :offset, :itemsPerPage");
        $this->_connect_db->bind(':package', $package);
        $this->_connect_db->bind(':subject', $subject);
        $this->_connect_db->bind(':category_as_bookcases', $category_as_bookcases);
        $this->_connect_db->bind(':bookshelvesid', $bookshelvesid);
        $this->_connect_db->bind(':offset', $offset);
        $this->_connect_db->bind(':itemsPerPage', $itemsPerPage);
        $data['data']['journalList']= $this->_connect_db->resultSet();
        $data['rowCount']=$this->_connect_db->rowCount();
        if (!empty($data)) {
           return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_all_journal_by_category($package, $subject, $offset, $itemsPerPage){
        $data = [];
        // set the default timezone to use.
        date_default_timezone_set('UTC');
        $this->_connect_db->query(/** @lang text */"SELECT p.packageid, s.subjectid, s.package_id, c.subjectid, c.categoriesid, jn.*   FROM package p  INNER JOIN subjects s ON s.package_id=p.packageid  INNER JOIN categories c ON c.subjectid=s.subjectid  INNER JOIN journals jn ON jn.categoryid= c.categoriesid WHERE p.packageid=:package  AND s.subjectid=:subject GROUP BY jn.journal_name ASC LIMIT :offset, :itemsPerPage ");
        $this->_connect_db->bind(':package', $package);
        $this->_connect_db->bind(':subject', $subject);
        $this->_connect_db->bind(':offset', $offset);
        $this->_connect_db->bind(':itemsPerPage', $itemsPerPage);
        $data['data']['journalList']= $this->_connect_db->resultSet();
        $data['rowCount']=$this->_connect_db->rowCount();
        if (!empty($data)) {
           return $data;
        }else {
            return false;
        }
    }

    public function _selectCategories(){
        $this->_connect_db->query(/** @lang text */"SELECT * FROM `categories`");
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    public function _selectBookshelves(){
        $this->_connect_db->query(/** @lang text */"SELECT * FROM `bookshelves`");
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
        /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function __saveLogoChanges($bookshelvesid,$categorieid,$journal_name,$imgType,$uploadPath){
        $sql =  $this->_connect_db->query(/** @lang text */"SELECT * FROM `journals` ORDER BY journalid DESC");
        $result= $this->_connect_db->single();
        if(empty($result)){
            $id = '101';
        }else {
            $oldid=$result->journalid;
            $id = $oldid+1;
        }
        $this->_connect_db->query(/** @lang text */"INSERT INTO `journals`(`journalid`, `bookshelvesid`, `categoryid`, `journal_name`, `imagetype`, `imagedata`) VALUES (:id, :bookshelvesid, :categorieid, :journal_name, :imgType, :uploadPath)");
        $this->_connect_db->bind(':id', $id);
        $this->_connect_db->bind(':bookshelvesid', $bookshelvesid);
        $this->_connect_db->bind(':categorieid', $categorieid);
        $this->_connect_db->bind(':journal_name', $journal_name);
        $this->_connect_db->bind(':imgType', $imgType);
        $this->_connect_db->bind(':uploadPath', $uploadPath);
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
        /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_header_core($cid, $bshid){
        $responses= [];
        $this->_connect_db->query(/** @lang text */"SELECT categoriesid, categories_name FROM categories WHERE categoriesid=:cid");
        $this->_connect_db->bind(':cid', $cid);
        $responses['url_category']= $this->_connect_db->single();
     
        $this->_connect_db->query(/** @lang text */ "SELECT * FROM bookshelves WHERE categoriesid=:cid AND bookshelvesid=:bshid");
        $this->_connect_db->bind(':bshid', $bshid);
        $this->_connect_db->bind(':cid', $cid);
        $responses['url_bookshelves']= $this->_connect_db->single();
        
        return $responses;
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_single_journal_on_Request($id): array
    {
        $this->_connect_db->query(/** @lang text */ "SELECT * FROM `journals` WHERE journalid=:id");
        $this->_connect_db->bind(':id', $id);
        $responses['results']= $this->_connect_db->single();
        return $responses;
    }

    public function isVerifyAuthUser($iss, $aud, $iat){
        $this->_connect_db->query('SELECT a.institution_email, a.user_id, b.* FROM users a inner join user_subscription b 
        on a.user_id = b.user_id WHERE a.institution_email = :iss AND b.package_id=:aud AND b.user_token=:iat');
        // Bind the values
        $this->_connect_db->bind(':iss', $iss);
        $this->_connect_db->bind(':aud', $aud);
        $this->_connect_db->bind(':iat', $iat);
        $row = $this->_connect_db->single();
        if (!empty($row)) {
            return true;
        }else {
            return false;
        }
    }
    public function LoginAuth($email, $password){
        $this->_connect_db->query('SELECT a.*, b.* FROM users a inner join user_subscription b on a.user_id = b.user_id WHERE institution_email = :email');
        // Bind the values
        $this->_connect_db->bind(':email', $email);
        $row = $this->_connect_db->single();
        if(!empty($row)){
            $hashedPassword = $row->password;
            if(password_verify($password, $hashedPassword)){
                return $row;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }
}
      
                                       
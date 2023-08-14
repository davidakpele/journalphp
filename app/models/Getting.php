<?php
    class Getting
    {

        private $_connect_db;
        public function __construct(){
            $this->_connect_db = new Database;
        }
         
        public function get_search($data_request){
            $data =[];
            $this->_connect_db->query("SELECT a.*, b.packageid  FROM subjects a INNER JOIN package b ON b.packageid=a.package_id WHERE subjects_name LIKE '%$data_request%' OR subjects_name LIKE  '%$data_request' OR subjects_name LIKE '$data_request%' OR subjects_name LIKE '_$data_request%' OR subjects_name LIKE '$data_request _%' AND a.package_id=603 ORDER BY RAND()");
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            $this->_connect_db->query("SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' OR journal_name LIKE '%$data_request' OR journal_name LIKE '$data_request%' OR journal_name LIKE '_$data_request%' OR journal_name LIKE '$data_request _%' ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();
    
            $this->_connect_db->query("SELECT a.*, b.subjectid, b.categoriesid,  c.subjectid, c.package_id,  e.packageid  FROM bookshelves a  INNER JOIN categories b  ON a.categoriesid= b.categoriesid  INNER JOIN subjects c   ON c.subjectid = b.subjectid  INNER JOIN package e  ON e.packageid=c.package_id  WHERE bookshelves_name   LIKE '%$data_request%'   OR bookshelves_name   LIKE '%$data_request'   OR bookshelves_name   LIKE '$data_request%'  OR bookshelves_name  LIKE '_$data_request%'  OR bookshelves_name  LIKE '$data_request _%'  ORDER BY RAND()");
            $data[]['bookshelves']= $this->_connect_db->resultSet();

            // $this->_connect_db->query(" SELECT *  FROM categories WHERE categories_name LIKE '%$data_request%' ORDER BY RAND()");
            // $data[]['categories']= $this->_connect_db->resultSet();
            
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
            $this->_connect_db->query("SELECT *  FROM subjects WHERE subjects_name LIKE '%$data_request%' OR subjects_name LIKE '%$data_request' OR subjects_name LIKE '$data_request%' OR subjects_name LIKE '_$data_request%' OR subjects_name LIKE '$data_request _%' ORDER BY RAND()");
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            $this->_connect_db->query("SELECT a.*, b.subjectid, b.categoriesid, c.subjectid, c.package_id, e.packageid  FROM bookshelves a INNER JOIN categories b ON a.categoriesid= b.categoriesid INNER JOIN subjects c  ON c.subjectid = b.subjectid INNER JOIN package e ON e.packageid=c.package_id WHERE bookshelves_name  LIKE '%$data_request%'  OR bookshelves_name  LIKE '%$data_request'  OR bookshelves_name  LIKE '$data_request%' OR bookshelves_name LIKE '_$data_request%' OR bookshelves_name LIKE '$data_request _%' ORDER BY RAND()");
            $data[]['bookshelves']= $this->_connect_db->resultSet();
            if (!empty($data)) {
                return $data;
            }else {
                return false;
            }
        }

        public function getjournals($data_request){
            $data =[];
            $this->_connect_db->query("SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' OR journal_name LIKE '%$data_request' OR journal_name LIKE '$data_request%' OR journal_name LIKE '_$data_request%' OR journal_name LIKE '$data_request _%' ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();

            // $this->_connect_db->query("SELECT *  FROM bookshelves WHERE bookshelves_name LIKE '%$data_request%' OR bookshelves_name LIKE '%$data_request' OR bookshelves_name LIKE '$data_request%' OR bookshelves_name LIKE '_$data_request%' OR bookshelves_name LIKE '$data_request _%' ORDER BY RAND() ");
            // $data[]['bookshelves']= $this->_connect_db->resultSet();

            // $this->_connect_db->query(" SELECT *  FROM categories WHERE categories_name LIKE '%$data_request%' ORDER BY RAND()");
            // $data[]['categories']= $this->_connect_db->resultSet();

            if (!empty($data)) {
                return $data;
            }else {
                return false;
            }
        }

    public function get_connection_table($id){
        /**
         * one you insert journal please use this code here and remove the active code because journal was not included in the query
         * $this->_connect_db->query("SELECT a.packageid, b.subjectid, b.package_id, c.subjectid, c.categoriesid, d.bookshelvesid, d.categoriesid, e.bookcaseid, e.journalid FROM package a  INNER JOIN subjects b ON b.package_id=a.packageid INNER JOIN categories c ON c.subjectid=b.subjectid INNER JOIN bookshelves d ON d.categoriesid=c.categoriesid INNER JOIN journals e ON e.bookcaseid=d.categoriesid WHERE c.categoriesid =:id  OR d.bookshelvesid=:id OR e.journalid=:id");
         */
        $data =[];
        $this->_connect_db->query("SELECT a.packageid,  b.subjectid, b.package_id,  c.subjectid, c.categoriesid, d.bookshelvesid, d.categoriesid FROM package a  INNER JOIN subjects b  ON b.package_id=a.packageid  INNER JOIN categories c  ON c.subjectid=b.subjectid INNER JOIN bookshelves d  ON d.categoriesid=c.categoriesid WHERE c.categoriesid=:id OR d.bookshelvesid =:id LIMIT 1");
        $this->_connect_db->bind(':id', $id);
        $data['data']= $this->_connect_db->single();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    public function get_user_subcribed_subjects(){
        $user_subcribed_package_id='603';
        $this->_connect_db->query("SELECT * FROM `subjects` WHERE package_id=:user_subcribed_package_id");
        $this->_connect_db->bind(':user_subcribed_package_id', $user_subcribed_package_id);
        $data['data']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    public function get_subject_info($id){
        $data =[];
        $this->_connect_db->query("SELECT * FROM `subjects` WHERE subjectid=:id");
        $this->_connect_db->bind(':id', $id);
        $data['subject']= $this->_connect_db->single();

        $this->_connect_db->query("SELECT a.*, b.subjectid FROM categories a INNER JOIN subjects b ON a.subjectid=b.subjectid WHERE b.subjectid =:id");
        $this->_connect_db->bind(':id', $id);
        $data['data']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    public function get_bookshalves_info($cat_id, $id){
        $data =[];
        $this->_connect_db->query("SELECT * FROM `categories` WHERE categoriesid =:cat_id");
        $this->_connect_db->bind(':cat_id', $cat_id);
        $data['category']= $this->_connect_db->single();

        $this->_connect_db->query("SELECT a.*, b.subjectid,b.categoriesid, c.subjectid FROM bookshelves a INNER JOIN categories b  ON a.categoriesid=b.categoriesid INNER JOIN subjects c ON c.subjectid =b.subjectid WHERE b.categoriesid =:id");
        $this->_connect_db->bind(':id', $id);
        $data['bookcases']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    
    public function get_journal_on_bookcase_ref($cat_id, $bookshelvesid){
        return true;
    }

    public function _selectCategories(){
        $this->_connect_db->query("SELECT * FROM `categories`");
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }

    public function _selectBookshelves(){
        $this->_connect_db->query("SELECT * FROM `bookshelves`");
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
    public function __saveLogoChanges($bookshelvesid,$categorieid,$journal_name,$imgType,$tmpLoc){
        $sql =  $this->_connect_db->query("SELECT * FROM `journals` ORDER BY journalid DESC");
        $result= $this->_connect_db->single();
        if(empty($result)){
            $id = '101';
        }else {
            $oldid=$result->journalid;
            $id = $oldid+1;
        }
        $this->_connect_db->query("INSERT INTO `journals`(`journalid`, `bookshelvesid`, `categoryid`, `journal_name`, `imagetype`, `imagedata`) 
        VALUES (:id, :bookshelvesid, :categorieid, :journal_name, :imgType, :tmpLoc)");
        $this->_connect_db->bind(':id', $id);
        $this->_connect_db->bind(':bookshelvesid', $bookshelvesid);
        $this->_connect_db->bind(':categorieid', $categorieid);
        $this->_connect_db->bind(':journal_name', $journal_name);
        $this->_connect_db->bind(':imgType', $imgType);
        $this->_connect_db->bind(':tmpLoc', $tmpLoc);
        $data= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
}
      
                                       
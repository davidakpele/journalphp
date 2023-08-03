<?php
    class Getting
    {

        private $_connect_db;
        public function __construct(){
            $this->_connect_db = new Database;
        }
        
        public function get_search($data_request){
            $data =[];
            $this->_connect_db->query("SELECT *  FROM subjects WHERE subjects_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            $this->_connect_db->query("SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();

            $this->_connect_db->query("SELECT *  FROM bookshelves WHERE bookshelves_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['bookshelves']= $this->_connect_db->resultSet();

            $this->_connect_db->query(" SELECT *  FROM categories WHERE categories_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['categories']= $this->_connect_db->resultSet();
            
            if (!empty($data)) {
                $mergin_Array_result= array_merge($data[0]['subjects'], $data[1]['journals'], $data[2]['bookshelves'], $data[3]['categories']);
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
            $this->_connect_db->query("SELECT *  FROM subjects WHERE subjects_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['subjects']= $this->_connect_db->resultSet();
            
            if (!empty($data)) {
                return $data;
            }else {
                return false;
            }
        }

        public function getjournals($data_request){
            $data =[];
            $this->_connect_db->query("SELECT * FROM journals WHERE journal_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['journals']= $this->_connect_db->resultSet();

            $this->_connect_db->query("SELECT *  FROM bookshelves WHERE bookshelves_name LIKE '%$data_request%' ORDER BY RAND() ");
            $data[]['bookshelves']= $this->_connect_db->resultSet();

            $this->_connect_db->query(" SELECT *  FROM categories WHERE categories_name LIKE '%$data_request%' ORDER BY RAND()");
            $data[]['categories']= $this->_connect_db->resultSet();

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
        $this->_connect_db->query("SELECT * FROM `subjects`");
        $data['data']= $this->_connect_db->resultSet();
        if (!empty($data)) {
            return $data;
        }else {
            return false;
        }
    }
}
      
                                       
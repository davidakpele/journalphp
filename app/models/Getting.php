<?php
    class Getting
    {
        /**
         * 
         * API Data Fetch
         * var [type]
         * 
         */

        private $_connect_db;
        public function __construct(){
            $this->_connect_db = new Database;
        }
        
        public function get_search(){
            return false;
        }
    }
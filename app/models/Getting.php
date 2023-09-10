<?php
    class Getting
    {

        private $_connect_db;
        public function __construct(){
            $this->_connect_db = new Database;
        }
         
        public function get_search($data_request){
            $data =[];
            $this->_connect_db->query(/** @lang text */"SELECT a.*, b.packageid  FROM subjects a INNER JOIN package b ON b.packageid=a.package_id WHERE a.package_id='603' AND subjects_name LIKE '%$data_request%' OR subjects_name LIKE  '%$data_request' OR subjects_name LIKE '$data_request%' OR subjects_name LIKE '_$data_request%' OR subjects_name LIKE '$data_request _%' GROUP BY subjects_name ORDER BY RAND()");
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
        $user_subcribed_package_id='603';
        $this->_connect_db->query(/** @lang text */"SELECT * FROM `subjects` WHERE package_id=:user_subcribed_package_id");
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
    public function get_journal_on_bookcase($formattedUid,$formattedUuid, $package, $subject, $category_as_bookcases, $offset, $itemsPerPage){
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
        $data["Countries"]= ["rs","hk","ru","jp","br","sg","mc","me","sm","id","ca","mk","gg","gi","ad","il","uy","kp","ch","za","cn","co","au","ph","vn","ng","tr"];
        $data["States"][]=array("ct", "ca", "va","co", "ut");
        $data["LanguageSwitcherPlaceholder"]= ["hi"=>"hi","ps"=>"ps","pt"=>"pt","hr"=>"hr","hu"=>"hu","yi"=>"yi","hy"=>"hy","yo"=>"yo","id"=>"id","af"=>"af","is"=>"is","it"=>"it","am"=>"am","zh"=>"zh","ar"=>"ar","ja"=>"ja","az"=>"az","zu"=>"zu","ro"=>"ro","ru"=>"ru","be"=>"be","bg"=>"bg","jv"=>"jv","bn"=>"bn","sd"=>"sd","bs"=>"bs","deflt"=> "en","si"=>"si","ka"=>"ka","sk"=>"sk","sl"=>"sl","sm"=>"sm","sn"=>"sn","so"=>"so","ca"=>"ca","sq"=>"sq","sr"=>"sr","kk"=>"kk","st"=>"st","kl"=>"kl","su"=>"su","km"=>"km","sv"=>"sv","kn"=>"kn","sw"=>"sw","ko"=>"ko","kr"=>"kr","ku"=>"ku","co"=>"co","ta"=>"ta","ky"=>"ky","cs"=>"cs","te"=>"te","tg"=>"tg","th"=>"th","cy"=>"cy","lb"=>"lb","tl"=>"tl","da"=>"da","tr"=>"tr","tt"=>"tt","de"=>"de","lo"=>"lo","lt"=>"lt","lv"=>"lv","uk"=>"uk","me"=>"me","mg"=>"mg","mi"=>"mi","ur"=>"ur","mk"=>"mk","ml"=>"ml","mn"=>"mn","uz"=>"uz","mr"=>"mr","ms"=>"ms","mt"=>"mt","el"=>"el","eo"=>"eo","my"=>"my","es"=>"es","et"=>"et","eu"=>"eu","vi"=>"vi","ne"=>"ne","fa"=>"fa","nl"=>"nl","no"=>"no","fi"=>"fi","fr"=>"fr","ga"=>"ga","gd"=>"gd","gl"=>"gl","gu"=>"gu","xh"=>"xh","pa"=>"pa","ha"=>"ha","pl"=>"pl","he"=>"he"];
        $data['CookieSPAEnabled']= 'false';
        $data['CookieSameSiteNoneEnabled']= 'false';
        $data['CookieV2CSPEnabled']= 'false';
        $data['UseV2']= 'true';
        $data['MobileSDK']= 'false';
        $data['SkipGeolocation']= 'false';
        $data['ScriptType']= 'PRODUCTION';
        $data['Version']= date('l');
        $data['RuleSet'][]['id']=$formattedUid;
        $data['BulkDomainCheckUrl']= "https://cookies-data.onetrust.io/bannersdk/v1/domaingroupcheck";
        $data['BannerPushesDown']='false';
        $data['Default']='true';
        $data['Global']='false';
        $data['Type']='true';
        $data['OptanonDataJSON']= $formattedUuid;
        $data['UseGoogleVendors']='false';
        $data['VariantEnabled']='false';
        $data['TestEndTime']='null';
        $data['Variants']=[];
        $data['TemplateName']="General Opt-In Template";
        $data['Conditions']=[];
        $data['GCEnable']='false';
        $data['IsGPPEnabled']="false";
        $data['rowCount']=$this->_connect_db->rowCount();
        if (!empty($data)) {
           return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_journal_on_bookshelves($formattedUid,$formattedUuid, $package, $subject, $category_as_bookcases, $bookshelvesid, $offset, $itemsPerPage){
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
        $data["Countries"]= ["rs","hk","ru","jp","br","sg","mc","me","sm","id","ca","mk","gg","gi","ad","il","uy","kp","ch","za","cn","co","au","ph","vn","ng","tr"];
        $data["States"][]=array("ct", "ca", "va","co", "ut");
        $data["LanguageSwitcherPlaceholder"]= ["hi"=>"hi","ps"=>"ps","pt"=>"pt","hr"=>"hr","hu"=>"hu","yi"=>"yi","hy"=>"hy","yo"=>"yo","id"=>"id","af"=>"af","is"=>"is","it"=>"it","am"=>"am","zh"=>"zh","ar"=>"ar","ja"=>"ja","az"=>"az","zu"=>"zu","ro"=>"ro","ru"=>"ru","be"=>"be","bg"=>"bg","jv"=>"jv","bn"=>"bn","sd"=>"sd","bs"=>"bs","deflt"=> "en","si"=>"si","ka"=>"ka","sk"=>"sk","sl"=>"sl","sm"=>"sm","sn"=>"sn","so"=>"so","ca"=>"ca","sq"=>"sq","sr"=>"sr","kk"=>"kk","st"=>"st","kl"=>"kl","su"=>"su","km"=>"km","sv"=>"sv","kn"=>"kn","sw"=>"sw","ko"=>"ko","kr"=>"kr","ku"=>"ku","co"=>"co","ta"=>"ta","ky"=>"ky","cs"=>"cs","te"=>"te","tg"=>"tg","th"=>"th","cy"=>"cy","lb"=>"lb","tl"=>"tl","da"=>"da","tr"=>"tr","tt"=>"tt","de"=>"de","lo"=>"lo","lt"=>"lt","lv"=>"lv","uk"=>"uk","me"=>"me","mg"=>"mg","mi"=>"mi","ur"=>"ur","mk"=>"mk","ml"=>"ml","mn"=>"mn","uz"=>"uz","mr"=>"mr","ms"=>"ms","mt"=>"mt","el"=>"el","eo"=>"eo","my"=>"my","es"=>"es","et"=>"et","eu"=>"eu","vi"=>"vi","ne"=>"ne","fa"=>"fa","nl"=>"nl","no"=>"no","fi"=>"fi","fr"=>"fr","ga"=>"ga","gd"=>"gd","gl"=>"gl","gu"=>"gu","xh"=>"xh","pa"=>"pa","ha"=>"ha","pl"=>"pl","he"=>"he"];
        $data['CookieSPAEnabled']= 'false';
        $data['CookieSameSiteNoneEnabled']= 'false';
        $data['CookieV2CSPEnabled']= 'false';
        $data['UseV2']= 'true';
        $data['MobileSDK']= 'false';
        $data['SkipGeolocation']= 'false';
        $data['ScriptType']= 'PRODUCTION';
        $data['Version']= date('l');
        $data['RuleSet'][]['id']=$formattedUid;
        $data['GeolocationUrl']= "https://geolocation.onetrust.com/cookieconsentpub/v1/geo/location";
        $data['BulkDomainCheckUrl']= "https://cookies-data.onetrust.io/bannersdk/v1/domaingroupcheck";
        $data['BannerPushesDown']='false';
        $data['Default']='true';
        $data['Global']='false';
        $data['Type']='true';
        $data['OptanonDataJSON']= $formattedUuid;
        $data['UseGoogleVendors']='false';
        $data['VariantEnabled']='false';
        $data['TestEndTime']='null';
        $data['Variants']=[];
        $data['TemplateName']="General Opt-In Template";
        $data['Conditions']=[];
        $data['GCEnable']='false';
        $data['IsGPPEnabled']="false";
        $data['rowCount']=$this->_connect_db->rowCount();
        if (!empty($data)) {
           return $data;
        }else {
            return false;
        }
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function get_all_journal_by_category($formattedUid, $formattedUuid, $package, $subject, $offset, $itemsPerPage){
        $data = [];
        // set the default timezone to use.
        date_default_timezone_set('UTC');
        $this->_connect_db->query(/** @lang text */"SELECT p.packageid, s.subjectid, s.package_id, c.subjectid, c.categoriesid, jn.*   FROM package p  INNER JOIN subjects s ON s.package_id=p.packageid  INNER JOIN categories c ON c.subjectid=s.subjectid  INNER JOIN journals jn ON jn.categoryid= c.categoriesid WHERE p.packageid=:package  AND s.subjectid=:subject GROUP BY jn.journal_name ASC LIMIT :offset, :itemsPerPage ");
        $this->_connect_db->bind(':package', $package);
        $this->_connect_db->bind(':subject', $subject);
        $this->_connect_db->bind(':offset', $offset);
        $this->_connect_db->bind(':itemsPerPage', $itemsPerPage);
        $data['data']['journalList']= $this->_connect_db->resultSet();
        $data["Countries"]= ["rs","hk","ru","jp","br","sg","mc","me","sm","id","ca","mk","gg","gi","ad","il","uy","kp","ch","za","cn","co","au","ph","vn","ng","tr"];
        $data["States"][]=array("ct", "ca", "va","co", "ut");
        $data["LanguageSwitcherPlaceholder"]= ["hi"=>"hi","ps"=>"ps","pt"=>"pt","hr"=>"hr","hu"=>"hu","yi"=>"yi","hy"=>"hy","yo"=>"yo","id"=>"id","af"=>"af","is"=>"is","it"=>"it","am"=>"am","zh"=>"zh","ar"=>"ar","ja"=>"ja","az"=>"az","zu"=>"zu","ro"=>"ro","ru"=>"ru","be"=>"be","bg"=>"bg","jv"=>"jv","bn"=>"bn","sd"=>"sd","bs"=>"bs","deflt"=> "en","si"=>"si","ka"=>"ka","sk"=>"sk","sl"=>"sl","sm"=>"sm","sn"=>"sn","so"=>"so","ca"=>"ca","sq"=>"sq","sr"=>"sr","kk"=>"kk","st"=>"st","kl"=>"kl","su"=>"su","km"=>"km","sv"=>"sv","kn"=>"kn","sw"=>"sw","ko"=>"ko","kr"=>"kr","ku"=>"ku","co"=>"co","ta"=>"ta","ky"=>"ky","cs"=>"cs","te"=>"te","tg"=>"tg","th"=>"th","cy"=>"cy","lb"=>"lb","tl"=>"tl","da"=>"da","tr"=>"tr","tt"=>"tt","de"=>"de","lo"=>"lo","lt"=>"lt","lv"=>"lv","uk"=>"uk","me"=>"me","mg"=>"mg","mi"=>"mi","ur"=>"ur","mk"=>"mk","ml"=>"ml","mn"=>"mn","uz"=>"uz","mr"=>"mr","ms"=>"ms","mt"=>"mt","el"=>"el","eo"=>"eo","my"=>"my","es"=>"es","et"=>"et","eu"=>"eu","vi"=>"vi","ne"=>"ne","fa"=>"fa","nl"=>"nl","no"=>"no","fi"=>"fi","fr"=>"fr","ga"=>"ga","gd"=>"gd","gl"=>"gl","gu"=>"gu","xh"=>"xh","pa"=>"pa","ha"=>"ha","pl"=>"pl","he"=>"he"];
        $data['CookieSPAEnabled']= 'false';
        $data['CookieSameSiteNoneEnabled']= 'false';
        $data['CookieV2CSPEnabled']= 'false';
        $data['UseV2']= 'true';
        $data['MobileSDK']= 'false';
        $data['SkipGeolocation']= 'false';
        $data['ScriptType']= 'PRODUCTION';
        $data['Version']= date('l');
        $data['RuleSet'][]['id']=$formattedUid;
        $data['GeolocationUrl']= "https://geolocation.onetrust.com/cookieconsentpub/v1/geo/location";
        $data['BulkDomainCheckUrl']= "https://cookies-data.onetrust.io/bannersdk/v1/domaingroupcheck";
        $data['BannerPushesDown']='false';
        $data['Default']='true';
        $data['Global']='false';
        $data['Type']='true';
        $data['OptanonDataJSON']= $formattedUuid;
        $data['UseGoogleVendors']='false';
        $data['VariantEnabled']='false';
        $data['TestEndTime']='null';
        $data['Variants']=[];
        $data['TemplateName']="General Opt-In Template";
        $data['Conditions']=[];
        $data['GCEnable']='false';
        $data['IsGPPEnabled']="false";
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
}
      
                                       
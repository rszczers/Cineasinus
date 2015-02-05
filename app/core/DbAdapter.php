<?php

class DbAdapter extends PDO {
    
    private static $instance = false;   
    
    private function DbAdapter() {
        parent::__construct(App::DSN, App::DBLOGIN, App::DBPASS);                
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    
    public static function getInstance() {
        if(!self::$instance) {
            $tmp = new DbAdapter();
            self::$instance = $tmp;   
        }
        return self::$instance;        
    }
      
    public static function findById($id, $table) {
        $sql = "select * from " . $table . " where id=" . $table;
        self::fetch($sql);
    }
    
    public function length($table) {
        $tmp = self::execQuery("SELECT COUNT(*) AS count FROM ". $table . ";");                
        return $tmp[0]['count'];
    }
        
   
    public function execQuery($sql) {        
        $sth = parent::prepare($sql);
        $sth->execute();
         
        $result = array();
        $row = $sth->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
        while($row != null) {
            $result[] = $row;
            $row = $sth->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
        }
        return $result;
    }
        
}
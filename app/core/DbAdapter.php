<?php
class DbAdapter extends PDO {
    
    private static $instance = false; 
    
    private static $dsn = "mysql:host=abraham.linuxpl.info;dbname=abraham_cineasinus";
    private static $username = "abraham_cineroot";
    private static $passwd = "sprytnasarnajesledzie1";
    
    private function DbAdapter() {
        parent::__construct(self::$dsn, self::$username, self::$passwd);                
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    
    public static function getInstance() {
        if(!self::$instance) {            
            self::$instance = new DbAdapter();        
        }
        return self::$instance;        
    }
      
    public static function findById($id, $table) {
        $sql = "select * from " . $table . " where id=" . $table;
        self::fetch($sql);
    }
    
    public static function length($table) {
        $tmp = self::execQuery("SELECT COUNT(*) AS count FROM ". $table . ";");
        return $tmp['count'];
    }
        
   
    public static function execQuery($sql) {        
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
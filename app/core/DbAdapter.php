<?php
class DbAdapter extends PDO {
    private static $instance = null;   
    
    private $dsn = "mysql:host=abraham.linuxpl.info;dbname=abraham_cineasinus";
    private $username = "abraham_cineroot";
    private $passwd = "sprytnasarnajesledzie1";
    
    private function DbAdapter() {
        parent::__construct($this->dsn, $this->username, $this->passwd);                
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    
    public function getInstance() {
        if(!$this->instance) {
            try {
                $this->instance = new DbAdapter();
            } catch (PDOException $e) {}
        } else {
            return $this->instance;
        }
    }
      
    function findByID($id, $table) {                
    }
    
    public function length($table) {
        $tmp = self::fetch("SELECT COUNT(*) FROM". $table . ";");
        return $tmp[0];
    }
        
    
    public function fetch($sql) {        
        $sth = $this->prepare($sql);
        $sth->execute();
         
        $result = array();
        $row = $sth->fetch(PDO::FETCH_OBJ, PDO::FETCH_ORI_NEXT);
        while($row != null) {
            $result[] = $row;
            $row = $sth->fetch(PDO::FETCH_OBJ, PDO::FETCH_ORI_NEXT);
        }
        return $result;
    }
}
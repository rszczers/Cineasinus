<?php
class DbAdapter extends PDO {
    private $dsn = "mysql:host=abraham.linuxpl.info;dbname=abraham_cineasinus";
    private $username = "abraham_cineroot";
    private $passwd = "sprytnasarnajesledzie1";
    
    function __construct() {
        try {
            parent::__construct($this->dsn, $this->username, $this->passwd);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
        } catch (PDOException $e) {
            
        }
    }
      
    function findByID($id, $table) {        
        
    }
    
    
}
<?php
class DbAdapter extends PDO {
    private $dsn = "mysql:host=abraham.linuxpl.info;dbname=abraham_cineasinus";
    private $username = "abraham_cineroot";
    private $passwd = "sprytnasarnajesledzie1";
    
    function __construct() {
        try {
            parent::__construct($this->dsn, $this->username, $this->passwd);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<pre>Połączono";
        } catch (PDOException $e) {
            throw $e;
        }
    }
    
    function add() {
        try {
            $sql = "INSERT INTO `users`
            VALUES (
            '11',
            '111',
            '222a',
            '333a',
            '444a',
            '555a',
            '333',
            '777')";
                                          
$stmt = $this->prepare($sql);                                             
$stmt->execute(); 
        } catch (PDOException $e) {
            echo "Błąd w zapytaniu\n";
            throw $e;            
        }
    }
    
    function findByID($id, $table) {        
        
    }
    
    
}
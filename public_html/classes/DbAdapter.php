<?php
class DbAdapter extends PDO {
    private $dsn = "mysql:host=;dbname=test";
    private $username = "abraham_cineasinus";
    private $passwd = "sprytnasarnajesledzie1";
    
    function __construct() {
        try {
            parent::__construct($dsn, $username, $passwd);            
        } catch (PDOException $e) {
            throw $e;
        }
    }
    
    function add() {
        try {
            exec();
        } catch (PDOException $ex) {
            throw $e;
        }
    }
}

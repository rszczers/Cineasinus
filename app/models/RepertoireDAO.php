<?php
require_once '../app/models/Repertoire.php';
require_once '../app/core/DbAdapter.php';

class RepertoireDAO implements IRepertoireDAO {
    private $db;
    
    function __construct() {
        $this->db = \DbAdapter::getInstance(); 
    }
     
    public function sqlAdd($repertoire) {
        $sql = "insert into `repertoire` "
                . "(`movieid`, `city`, `cinemaname`,"
                . "`date`, `price`)"
                . " values (" .
                "'" . $repertoire->getMovieId() . "'," .                
                "'" . $repertoire->getCity() . "'," .                
                "'" . $repertoire->getDate() . "'," .
                "'" . $repertoire->getPrice() . "')";
        return $sql;
    }

    function sqlRead($id) {
        $sql = "select * from `repertoire` where 'id' = " . 
            $repertoire->getId();
        return $sql;
    }
    
    public function sqlRm($repertoire) {
        $sql = "delete from `repertoire` where " .
            "'id' = " . $repertoire->getId();
        return sql;        
    }
    public function sqlUpdate($repertoire) {
        $sql = "update `repertoire`" .
               "set movieid = '" . $repertoire->getMovieId() . "'," .
               "city = '" . $repertoire->getCity() . "'," .               
               "date = '" . $repertoire->getDate() . "'," .
               "price = '" . $repertoire->getPrice() . "' " .
               "where 'id' = " . $repertoire->getId();
        return $sql;
    }

    public function add($repertoire) {
        $sql = $this->sqlAdd($repertoire);
        $this->db->execQuery($sql);        
    }

    public function edit($movie) {
        
    }

    public function getViaCinemaName($arg) {
        
    }

    public function getViaCity($arg) {
        
    }

    public function getViaDate($arg) {
        
    }

    public function getViaId($arg) {
        
    }

    public function getViaMovieId($arg) {
        
    }

    public function getViaPrice($arg) {
        
    }

    public function populate() {
        $sql = "SELECT * FROM `repertoire`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Repertoire($row);
        }
        return $result;
    }
    
    public function getPage($q, $i) {
        $sql = "SELECT * FROM "
                . "("
                . " SELECT * FROM `repertoire` LIMIT '" . ($q * ($i+1))
                . "')"
                . " MINUS "
                . "SELECT * FROM `repertoire` LIMIT '" . ($q * $i) . "';";    
        echo $sql;
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Repertoire($row);
        }
        return $result;
    }
    

    public function remove($movie) {
        
    }

}

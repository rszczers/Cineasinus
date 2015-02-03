<?php
require_once '../app/models/Repertoire.php';
class RepertoireDAO implements IRepertoireDAO {
    private $db;
    function __construct() {
        $this->db = new DbAdapter();
    }
     
    static public function sqlAdd($repertoire) {
        $sql = "insert into `repertoire` "
                . "(`movieid`, `city`, `cinemaname`,"
                . "`date`, `price`)"
                . " values (" .
                "'" . $repertoire->getMovieId() . "," .                
                "'" . $repertoire->getCity() . "," .                
                "'" . $repertoire->getDate() . "," .
                "'" . $repertoire->getPrice() . ")";
        return $sql;
    }

    static function sqlRead($id) {
        $sql = "select * from `repertoire` where 'id' = " . 
            $repertoire->getId();
        return $sql;
    }
    static public function sqlRm($repertoire) {
        $sql = "delete from `repertoire` where " .
            "'id' = " . $repertoire->getId();
        return sql;        
    }
    static public function sqlUpdate($repertoire) {
        $sql = "update `repertoire`" .
               "set movieid = '" . $repertoire->getMovieId() . "'," .
               "city = '" . $repertoire->getCity() . "'," .               
               "date = '" . $repertoire->getDate() . "'," .
               "price = '" . $repertoire->getPrice() . "' " .
               "where 'id' = " . $repertoire->getId();
        return $sql;
    }

    public static function add($repertoire) {
        $sql = $this->sqlAdd($repertoire);
        $this->db->execQuery($sql);        
    }

    public static function edit($movie) {
        
    }

    public static function getViaCinemaName($arg) {
        
    }

    public static function getViaCity($arg) {
        
    }

    public static function getViaDate($arg) {
        
    }

    public static function getViaId($arg) {
        
    }

    public static function getViaMovieId($arg) {
        
    }

    public static function getViaPrice($arg) {
        
    }

    public static function populate() {
        
    }

    public static function remove($movie) {
        
    }

}

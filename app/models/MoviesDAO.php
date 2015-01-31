<?php
class MoviesDAO implements IMovieDAO {
    private $db;
    
    function __construct() {
        $this->db = new DbAdapter();
    }
    
    public function add($movie) {
        $sql = $this->sqlAdd($movie);
        $this->db->execQuery($sql);        
    }

    public function edit($newMovie) {
        
    }

    public function getPlPremiere($string) {
        
    }

    public function getPoster($string) {
        
    }

    public function getViaCategory($string) {
        
    }

    public function getViaDescription($string) {
        
    }

    public function getViaDirector($string) {
        
    }

    public function getViaDuration($string) {
        
    }

    public function getViaFPremiere($string) {
        
    }

    public function getViaId($string) {
        
    }

    public function getViaName($arg) {
        
    }

    public static function populate() {
        $sql = "select * from 'movies'";
        $result = array();
        $tmp = $this->db->execQuery($sql);
        foreach($tmp as $key => $row) {
            $result[] = Movie::newMovie($row);
        }
        return $result;
    }

    public function remove($movie) {
        $sql = $this->sqlRm($movie);
        $this->db->execQuery($sql);
    }
    
    function sqlAdd($movie) {
        $sql = "insert into `movies` "
                . "(`name`, `category`, `duration`, `director`,"
                . "`description`, `plpremiere`, `fpremiere`)"
                . " values (" .
                "'" . $movie->getName() . "," .
                "'" . $movie->getCategory() . "," .
                "'" . $movie->getDuration() . "," .
                "'" . $movie->getDirector() . "," .
                "'" . $movie->getDescription() . "," .
                "'" . $movie->getPlPremiere() . "," .
                "'" . $movie->getFPremiere() . ")";
        return $sql;
    }
    
    function sqlRead($id) {
        $sql = "select * from `movies` where 'id' = " . 
            $movie->getId();
        return $sql;        
    }
    public function sqlRm($movie) {
        $sql = "delete from `movies` where " .
            "'id' = " . $movie->getId();
        return sql;
    }
    
    public function sqlUpdate($movie) {
        $sql = "update `movies`" .
               "set name = '" . $movie->getName() . "'," .
               "category = '" . $movie->getCategory() . "'," .
               "duration = '" . $movie->getDuration() . "'," .
               "director = '" . $movie->getDirector() . "'" .
               "description = '" . $movie->getDescription() . "'" .
               "plpremiere = '" . $movie->getPlPremiere() . "'" .
               "fpremiere = '" . $movie->getFPremiere() . "' " .
               "where 'id' = " . $movie->getId();
        return $sql;
    }

    
}

<?php
require_once '../app/models/Movie.php';
class MoviesDAO implements IMovieDAO {
    private $db;
    
    
    function __construct() {
        $this->db = \DbAdapter::getInstance();        
    }
    
    public function add($movie) {
        $sql = $this->sqlAdd($movie);
        $this->db->execQuery($sql);
    }

    public function edit($movie) {
        $sql = $this->sqlUpdate($movie);
        $this->db->execQuery($sql);
    }        

    public function getPlPremiere($string) {
        
    }

    public function getPoster($string) {
        
    }

    public function getViaCategory($string) {
        
    }
    
    public function getCategories() {
        $sql = "select category form `movies`";
        $tmp = array();       
        $querry = $this->db->execQuery($sql);
        foreach($querry as $key => $value) {
            $tmp[] = $value['category'];
        }
        return $tmp;
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
    
    public function populate() {
        $this->populateMovies();
    }
    
    public function populateRaw() {
        $sql = "SELECT * FROM `movies`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = $row;
        }
        return $result;
    }

    public function populateMovies() {
        $sql = "SELECT * FROM `movies`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Movie($row);
        }
        return $result;
    }
    
    public function getLastMovies($n) {
        $sql = "select * from ( select * from `movies` order by id desc "
                . "limit " . $n ." ) sub order by id asc";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Movie($row);
        }
        return $result;        
    }
    
    public function getFirstMovies($n) {
        $sql = "select * from `movies` order by id desc "
                . "limit " . $n;
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Movie($row);
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
    
    public function findById($id) {
        $sql = "select * from `movies` where id=" . $id;
        $array = $this->db->execQuery($sql);
        return new Movie($array[0]);
    }
    
    public function count() {
        $sql = "select count(id) from `movies`";
        $array = $this->db->execQuery($sql);
        return $array[0]['count(id)'];
    }   
}

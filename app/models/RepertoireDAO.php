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
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        $limit1 = (int)($q * ($i+1));
        $limit2 = (int)($q * $i);
        
        $sql = "SELECT * FROM `repertoire` INNER JOIN `movies` ON repertoire.movieid=movies.id  LIMIT :limit2, :limit1;";           
        $stmt = $pdo -> prepare($sql);
        
        $stmt->bindParam(':limit1', $limit1, PDO::PARAM_INT);
        $stmt->bindParam(':limit2', $limit2, PDO::PARAM_INT);
        
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        $repertoire = array();
        $movies = array();
        foreach($result as $key => $row) {
            $tmp = array('movieid'=>$row['movieid'],
                'id'=>$row['id'],
                'date'=>$row['date'],
                'price'=>$row['price']);
            $repertoire[] = new Repertoire($tmp);
            $tmp = array('name' => $row['name'],
                'category' => $row['category'],
                'duration' => $row['duration'],
                'diretor' => $row['director'],
                'description'=> $row ['description'],
                'plpremiere' => $row['plpremiere'],
                'id' => $row['id'],
                'fpremiere' => $row['fpremiere'],
                'poster' => $row['poster']);
            $movies[] = new Movie($tmp);
        }        
        $result = array('repertoire' => $repertoire, 'movies' => $movies);
        return $result;
    }
    

    public function remove($movie) {
        
    }

}

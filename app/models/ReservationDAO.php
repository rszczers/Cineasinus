<?php
require_once '../app/models/Reservation.php';
class ReservationDAO implements IReservationDAO {
    private $db;
    
    function __construct() {
        $this->db = DbAdapter::getInstance();
    }        
    
    public function add($reser) {        
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "insert into `reservations` "
                . "(`userid`, `code`, `repertid`)"                
                . " values ("
                . ":userid, "
                . ":code, "
                . ":repertid );";

        $stmt = $pdo -> prepare($sql);
        
        $stmt -> bindValue(':userid', $user->getPasshash(), PDO::PARAM_STR);
        $stmt -> bindValue(':code', $user->getEmail(), PDO::PARAM_STR);
        $stmt -> bindValue(':repertid', $user->getRank(), PDO::PARAM_INT);
                
        $stmt ->execute();
                      
        $sql = "SELECT * FROM `reservations` WHERE userid = '" . $reser->getUserId() .
            "' AND code = '" . $reser->getCode() . "' AND repertid = '" . $reser->getRepertId(). "';";

        $result = $this->db->execQuery($sql);                                    
        $result = $result[0]['id'];
        return $result;                    
    }    
    
    public function check($reser) {
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "UPDATE `reservations` "
             . "SET check = '1' "
             . "WHERE id = :id;";

        $stmt = $pdo -> prepare($sql);
        
        $stmt -> bindValue(':id', $reser->getId(), PDO::PARAM_STR);
                        
        $stmt ->execute();
    }
    
    
    public function getViaMovieId($arg) {        
    }
    
    public function getViaCode($arg) {
                
    }

    public function getViaId($arg) {
        
    }

    public function getViaRepertID($arg) {
        
    }

    public function getViaUserID($userid, $q, $i) {
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $x = (int)($q * $i);
        
        $y = $q;
              
        $sql = "SELECT *
            FROM reservations N
            INNER JOIN repertoire M
            ON N.repertid = M.id
            INNER JOIN movies O
            ON M.movieid = O.id
            WHERE N.userid = :userid
            ORDER BY M.date
            LIMIT :q, :from;";
        
        $stmt = $pdo -> prepare($sql);
        
        $stmt->bindParam(':from', $y, PDO::PARAM_INT);
        $stmt->bindParam(':q', $x, PDO::PARAM_INT);
        $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
        
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        $reservations = array();
        $repertoire = array();
        $movies = array();
        
        foreach($result as $key => $row) {            
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
            
            $tmp = array('movieid'=>$row['movieid'],
                'id'=>$row['id'],
                'date'=>$row['date'],
                'price'=>$row['price']);
            
            $repertoire[] = new Repertoire($tmp);
            
            $tmp = array('id' => $row['id'],
                'userid' => $row['userid'], 
                'code' => $row['code'],
                'repertid' => $row['repertid'], 
                'checked' => $row['checked']
                    );
            $reservations[] = new Reservation($tmp);
        }
        
        $length = $this->db->length('reservations');
        $result = array('repertoire' => $repertoire, 'movies' => $movies, 'reservations' => $reservations, 'length' => $length);
        return $result;                    
    }    

    public function isChecked($arg) {
        
    }
    
    public function remove($reser) {
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "DELETE FROM `reservations` "
             . "id = :id";

        $stmt = $pdo -> prepare($sql);
        
        $stmt -> bindValue(':id', $reser->getId(), PDO::PARAM_STR);        
                
        $stmt ->execute();    
    }
    
    public function populate() {
        $sql = "SELECT * FROM `reservations`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new Reservation($row);
        }
        return $result;
    }
    
    public function getPage($q, $i) {
        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $x = (int)($q * $i);
        
        $y = $q;
        
        $sql = "SELECT * FROM `reservations` a "
             . "INNER JOIN `repertoire` b ON a.movieid = b.movies.id "
             . "INNER JOIN `movies` c ON b.movieid = c.id "             
             . "ORDER BY date LIMIT :q, :from;";
        
        $stmt = $pdo -> prepare($sql);
        
        $stmt->bindParam(':from', $y, PDO::PARAM_INT);
        $stmt->bindParam(':q', $x, PDO::PARAM_INT);
        
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        $reservations = array();
        $repertoire = array();
        $movies = array();
        
        foreach($result as $key => $row) {            
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
            
            $tmp = array('movieid'=>$row['movieid'],
                'id'=>$row['id'],
                'date'=>$row['date'],
                'price'=>$row['price']);
            $repertoire[] = new Repertoire($tmp);
            
            $tmp = array('id' => $row('id'), 'userid' => $row('userid'), 
                'code' => $row('code'), 'repertid' => $row('repertid'), 
                'checked' => $row('checked'));
            $reservations[] = new Reservation($tmp);
        }
        
        $length = $this->db->length('reservations');
        $result = array('repertoire' => $repertoire, 'movies' => $movies, 'reservations' => $reservations, 'length' => $length);
        return $result;
    }
}

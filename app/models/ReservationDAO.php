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
    
    public function getViaMovieId($arg) {        
    }
    
    public function getViaCode($arg) {
                
    }

    public function getViaId($arg) {
        
    }

    public function getViaRepertID($arg) {
        
    }

    public function getViaUserID($arg) {
        
    }
    

    public function check($arg) {
        
    }

    public function isChecked($arg) {
        
    }

    public function remove($arg) {
        
    }

}

<?php
require_once '../app/models/Reservation.php';
class ReservationDAO implements IReservationDAO {
    private $db;
    
    function __construct() {
        $this->db = new DbAdapter();
    }

    function sqlAdd ($user) {
        $sql = "insert into `reservations` "
                . "(`userid`, `code`, `repertid`,"
                . "`checked`)"
                . " values (" .
                "'" . $user->getUserId() . "," .                
                "'" . $user->getCode() . "," .
                "'" . $user->getRepertId() . "," .                
                "'" . $user->isChecked() . ")";
        return $sql;        
    }

    function sqlRead($user) {
        $sql = "select * from `reservations` where 'id' = " . 
               $user->getId();
        return $sql;
    }
    public function sqlRm($user) {
        $sql = "delete from `reservation` where " .
            "'id' = " . $user->getId();
        return sql;
    }
    public function sqlUpdate($user) {
        $sql = "update `reservation`" .
               "set userid = '" . $user->getUserId() . "'," .
               "code = '" . $user->getCode() . "'," .
               "repertid = '" . $user->getRepertId() . "'," .
               "checked = '" . $user->isChecked() . "' " .
               "where 'id' = " . $user->getId();
        return $sql;
    }
            
    public function sqlCheck($user) {
        $sql = "update `reservations` " .
               "set checked = '1' where "
                . "id = " . $user->getId();        
        return $sql;
    }

    public function getViaCode($arg) {
                
    }

    public function getViaId($arg) {
        
    }

    public function getViaRepertID($arg) {
        
    }

    public function getViaUserID($arg) {
        
    }

    public function add($arg) {
        
    }

    public function check($arg) {
        
    }

    public function isChecked($arg) {
        
    }

    public function remove($arg) {
        
    }

}

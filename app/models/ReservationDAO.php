<?php
/**
 * Description of ReservationDAO
 *
 * @author rszczers
 */
class ReservationDAO implements IReservationDAO {


    static function sqlAdd ($user) {
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

    static function sqlRead($user) {
        $sql = "select * from `reservations` where 'id' = " . 
               $user->getId();
        return $sql;
    }
    static public function sqlRm($user) {
        $sql = "delete from `reservation` where " .
            "'id' = " . $user->getId();
        return sql;
    }
    static public function sqlUpdate($user) {
        $sql = "update `reservation`" .
               "set userid = '" . $user->getUserId() . "'," .
               "code = '" . $user->getCode() . "'," .
               "repertid = '" . $user->getRepertId() . "'," .
               "checked = '" . $user->isChecked() . "' " .
               "where 'id' = " . $user->getId();
        return $sql;
    }
            
    static public function sqlCheck($user) {
        $sql = "update `reservations` " .
               "set checked = '1' where "
                . "id = " . $user->getId();        
        return $sql;
    }

    public static function getViaCode($arg) {
        
    }

    public static function getViaId($arg) {
        
    }

    public static function getViaRepertID($arg) {
        
    }

    public static function getViaUserID($arg) {
        
    }

    public static function add($arg) {
        
    }

    public static function check($arg) {
        
    }

    public static function isChecked($arg) {
        
    }

    public static function remove($arg) {
        
    }

}

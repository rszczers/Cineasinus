<?php
require_once '../app/models/User.php';
class UsersDAO implements IUserDAO{
    private $db;
    
    function __construct() {
        $this->db = new DbAdapter();
    }
    
    public function add($user) {
        $sql = $this->sqlAdd($user);
        $this->db->execQuery($sql);
    }

    public function chRole($arg) {
        
    }

    public function delete($user) {
        $sql = $this->sqlRm($user);
        $this->db->execQuery($sql);
    }

    public function edit($user) {
        $sql = $this->sqlUpdate($user);
        $this->db->execQuery($sql);
    }

    public function getAvatar($args) {
        
    }

    public function getViaEmail($args) {
        
    }

    public function getViaFirst($args) {
        
    }

    public function getViaId($args) {
        
    }

    public function getViaLast($args) {
        
    }

    public function getViaPasshash($args) {
        
    }

    public function getViaPhone($args) {
        
    }

    public function getViaRank($args) {
        
    }

    public function getViaRole($args) {
        
    }

    public function sqlAdd($user) {
        $sql = "insert into `users` "
                . "(`passhash`, `email`, `rank`,"
                . "`first`, `last`, `phone`)"                
                . " values (" .
                "'" . $user->getPasshass() . "," .                
                "'" . $user->getEmail() . "," .
                "'" . $user->getRank() . "," .                
                "'" . $user->getFirst() . "," .                
                "'" . $user->getLast() . "," .                
                "'" . $user->getPhone() . ")";
        return $sql;
    }

    public function sqlRead($user) {
       $sql = "select * from `users` where 'id' = " . 
               $user->getId();
       return $sql;
    }
    public function sqlRm($user) {
        $sql = "delete from `users` where " .
            "'id' = " . $user->getId();
        return sql;
    }
    public function sqlUpdate($user) {
        $sql = "update `users`" .
               "set passhash = '" . $user->getPasshash() . "'," .
               "email = '" . $user->getEmail() . "'," .
               "rank = '" . $user->getRank() . "'," .
               "first = '" . $user->getFirst() . "'" .
               "last = '" . $user->getLast() . "'" .
               "phone = '" . $user->getPhone() . "' " .               
               "where 'id' = " . $user->getId();
        return $sql;
    }

    public function populate() {
        $sql = "SELECT * FROM `users`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new User($row);
        }
        return $result;
    }

}

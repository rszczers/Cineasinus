<?php
class UsersDAO implements IUserDAO{
    public static function add($arg) {
        
    }

    public static function chRole($arg) {
        
    }

    public static function delete($arg) {
        
    }

    public static function edit($arg) {
        
    }

    public static function getAvatar($args) {
        
    }

    public static function getViaEmail($args) {
        
    }

    public static function getViaFirst($args) {
        
    }

    public static function getViaId($args) {
        
    }

    public static function getViaLast($args) {
        
    }

    public static function getViaPasshash($args) {
        
    }

    public static function getViaPhone($args) {
        
    }

    public static function getViaRank($args) {
        
    }

    public static function getViaRole($args) {
        
    }

    public static function sqlAdd($user) {
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

    public static function sqlRead($user) {
       $sql = "select * from `users` where 'id' = " . 
               $user->getId();
       return $sql;
    }
    public static function sqlRm($user) {
        $sql = "delete from `users` where " .
            "'id' = " . $user->getId();
        return sql;
    }
    public static function sqlUpdate($user) {
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
}

<?php
class UsersDAO implements IUserDAO{
    
    
    public function add($user) {
        
    }

    public function chRole($arg) {
        
    }

    public function delete($arg) {
        
    }

    public function edit($arg) {
        
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
}

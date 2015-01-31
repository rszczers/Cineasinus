<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersDAO
 *
 * @author rszczers
 */
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

    public function sqlAdd($user) {
        $sql = "insert into `users` "
                . "(`passhash`, `email`, `rank`,"
                . "`first`, `last`, `phone`)"                
                . " values (" .
                "'" . $user->gethashpass . "," .                
                "'" . $this->email . "," .
                "'" . $this->rank . "," .                
                "'" . $this->first . "," .                
                "'" . $this->last . "," .                
                "'" . $this->phone . ")";
        return $sql;
    }

    function sqlRead($user) {
       $sql = "select * from `users` where 'id' = " . 
               $this->id;
       return $sql;
    }
    public function sqlRm($user) {
        $sql = "delete from `users` where " .
            "'id' = " . $this->id;
        return sql;
    }
    public function sqlUpdate($user) {
        $sql = "update `users`" .
               "set passhash = '" . $this->passhash . "'," .
               "email = '" . $this->email . "'," .
               "rank = '" . $this->rank . "'," .
               "first = '" . $this->first . "'" .
               "last = '" . $this->last . "'" .
               "phone = '" . $this->phone . "' " .               
               "where 'id' = " . $this->id;
        return $sql;
    }
}

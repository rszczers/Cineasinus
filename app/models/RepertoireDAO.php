<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepertoireDAO
 *
 * @author rszczers
 */
class RepertoireDAO implements IRepertoireDAO {
public static function edit(){
}    public static function getViaCinemaName() {
        
    }

    public static function getViaCity() {
        
    }

    public static function getViaDate() {
        
    }

    public static function getViaId() {
        
    }

    public static function getViaMovieId() {
        
    }

    public static function getViaPrice() {
        
    }

    public static function populate() {
        
    }

    public static function remove() {
        
    }

   
    static public function sqlAdd($repertoire) {
        $sql = "insert into `repertoire` "
                . "(`movieid`, `city`, `cinemaname`,"
                . "`date`, `price`)"
                . " values (" .
                "'" . $this->movieid . "," .                
                "'" . $this->city . "," .
                "'" . $this->cinemaname . "," .
                "'" . $this->date . "," .
                "'" . $this->price . ")";
        return $sql;
    }

    static function sqlRead($id) {
        $sql = "select * from `repertoire` where 'id' = " . 
            $this->id;
        return $sql;
    }
    static public function sqlRm($repertoire) {
        $sql = "delete from `repertoire` where " .
            "'id' = " . $this->id;
        return sql;        
    }
    static public function sqlUpdate($repertoire) {
        $sql = "update `repertoire`" .
               "set movieid = '" . $this->movieid . "'," .
               "city = '" . $this->city . "'," .
               "cinemaname = '" . $this->cinemaname . "'," .
               "date = '" . $this->date . "'," .
               "price = '" . $this->price . "' " .
               "where 'id' = " . $this->id;
        return $sql;
    }
}

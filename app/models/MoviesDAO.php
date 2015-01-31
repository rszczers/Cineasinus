<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MoviesDAO
 *
 * @author rszczers
 */
class MoviesDAO implements IMovieDAO {
    public static function add() {
        
    }

    public static function edit() {
        
    }

    public static function getPlPremiere($string) {
        
    }

    public static function getPoster($string) {
        
    }

    public static function getViaCategory($string) {
        
    }

    public static function getViaDescription($string) {
        
    }

    public static function getViaDirector($string) {
        
    }

    public static function getViaDuration($string) {
        
    }

    public static function getViaFPremiere($string) {
        
    }

    public static function getViaId($string) {
        
    }

    public static function getViaName($arg) {
        
    }

    public static function populate() {
        
    }

    public static function remove() {
        
    }
    
    static function sqlAdd($movie) {
        $sql = "insert into `movies` "
                . "(`name`, `category`, `duration`, `director`,"
                . "`description`, `plpremiere`, `fpremiere`)"
                . " values (" .
                "'" . $movie->name . "," .
                "'" . $movie->category . "," .
                "'" . $movie->duration . "," .
                "'" . $movie->director . "," .
                "'" . $movie->description . "," .
                "'" . $movie->plpremiere . "," .
                "'" . $movie->fpremiere . ")";
        return $sql;
    }
    
    static function sqlRead($id) {
        $sql = "select * from `movies` where 'id' = " . 
            $movie->id;
        return $sql;        
    }
    static public function sqlRm($movie) {
        $sql = "delete from `movies` where " .
            "'id' = " . $movie->id;
        return sql;
    }
    
    static public function sqlUpdate($movie) {
        $sql = "update `movies`" .
               "set name = '" . $movie->name . "'," .
               "category = '" . $movie->category . "'," .
               "duration = '" . $movie->duration . "'," .
               "director = '" . $movie->director . "'" .
               "description = '" . $movie->description . "'" .
               "plpremiere = '" . $movie->plpremiere . "'" .
               "fpremiere = '" . $movie->fpremiere . "' " .
               "where 'id' = " . $movie->id;
        return $sql;
    }

    
}

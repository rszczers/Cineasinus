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
    public static function add($movie) {
        
    }

    public static function edit($oldMovie) {
        
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

    public static function remove($movie) {
        
    }
    
    static function sqlAdd($movie) {
        $sql = "insert into `movies` "
                . "(`name`, `category`, `duration`, `director`,"
                . "`description`, `plpremiere`, `fpremiere`)"
                . " values (" .
                "'" . $movie->getName() . "," .
                "'" . $movie->getCategory() . "," .
                "'" . $movie->getDuration() . "," .
                "'" . $movie->getDirector() . "," .
                "'" . $movie->getDescription() . "," .
                "'" . $movie->getPlPremiere() . "," .
                "'" . $movie->getFPremiere() . ")";
        return $sql;
    }
    
    static function sqlRead($id) {
        $sql = "select * from `movies` where 'id' = " . 
            $movie->getId();
        return $sql;        
    }
    static public function sqlRm($movie) {
        $sql = "delete from `movies` where " .
            "'id' = " . $movie->getId();
        return sql;
    }
    
    static public function sqlUpdate($movie) {
        $sql = "update `movies`" .
               "set name = '" . $movie->getName() . "'," .
               "category = '" . $movie->getCategory() . "'," .
               "duration = '" . $movie->getDuration() . "'," .
               "director = '" . $movie->getDirector() . "'" .
               "description = '" . $movie->getDescription() . "'" .
               "plpremiere = '" . $movie->getPlPremiere() . "'" .
               "fpremiere = '" . $movie->getFPremiere() . "' " .
               "where 'id' = " . $movie->getId();
        return $sql;
    }

    
}

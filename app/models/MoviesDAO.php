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

    
    public function add($movie) {
        
    }

    public function edit($oldMovie) {
        
    }

    public function getPlPremiere($string) {
        
    }

    public function getPoster($string) {
        
    }

    public function getViaCategory($string) {
        
    }

    public function getViaDescription($string) {
        
    }

    public function getViaDirector($string) {
        
    }

    public function getViaDuration($string) {
        
    }

    public function getViaFPremiere($string) {
        
    }

    public function getViaId($string) {
        
    }

    public function getViaName($arg) {
        
    }

    public function populate() {
        
    }

    public function remove($movie) {
        
    }
    
    function sqlAdd($movie) {
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
    
    function sqlRead($id) {
        $sql = "select * from `movies` where 'id' = " . 
            $movie->getId();
        return $sql;        
    }
    public function sqlRm($movie) {
        $sql = "delete from `movies` where " .
            "'id' = " . $movie->getId();
        return sql;
    }
    
    public function sqlUpdate($movie) {
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

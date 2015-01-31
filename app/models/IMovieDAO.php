<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author rszczers
 */
Interface IMovieDAO {

    public static function getViaName($arg);

  /**
     * reads all movies from database containing $string in category
     */
    public static function getViaCategory($string);

  /**
     * reads all movies from database containing $string as duration
     */
    public static function getViaDuration($string);

  /**
     * reads all movies from database containing $string as director
     */
    public static function getViaDirector($string);

  /**
     * reads all movies from database containing $string in Description
     */
    public static function getViaDescription($string);

  /**
     * reads all movies from database containing $string 
     */
    public static function getPlPremiere($string);

  /**
     * reads all movies from database containing $string
     */
    public static function getViaId($string);

    /**
     * reads all movies from database containing $string
     */
    public static function getViaFPremiere($string);

    /**
     * reads all posters from database containing $string
     */
    public static function getPoster($string);

    /**
     * Reads all movies from database
     */
    public static function populate();
    
    public static function remove();
    public static function add();
    public static function edit();
}

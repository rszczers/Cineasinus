<?php
Interface IMovieDAO {

    public function getViaName($arg);

  /**
     * reads all movies from database containing $string in category
     */
    public function getViaCategory($string);

  /**
     * reads all movies from database containing $string as duration
     */
    public function getViaDuration($string);

  /**
     * reads all movies from database containing $string as director
     */
    public function getViaDirector($string);

  /**
     * reads all movies from database containing $string in Description
     */
    public function getViaDescription($string);

  /**
     * reads all movies from database containing $string 
     */
    public function getPlPremiere($string);

  /**
     * reads all movies from database containing $string
     */
    public function getViaId($string);

    /**
     * reads all movies from database containing $string
     */
    public function getViaFPremiere($string);

    /**
     * reads all posters from database containing $string
     */
    public function getPoster($string);

    /**
     * Reads all movies from database
     */
    public function populate();
    
    public function remove($movie);
    public function add($movie);
    public function edit($movie);
}

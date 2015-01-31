<?php
class Movie implements Model, MovieDAO {
    private $name;
    private $category;
    private $duration;
    private $director;
    private $description;   
    private $plpremiere;
    private $id;
    private $fpremiere;
    private $poster;
    
    function __construct($name, $category, $duration, $director,
            $description, $plpremiere, $id, $poster) {
        $this->name = $name;
        $this->category = $category;
        $this->duration = $duration;
        $this->director = $director;
        $this->description = $description;
        $this->plpremiere = $plpremiere;
        $this->id = $id;
        $this->poster = $poster;    
    }
    
    public static function newMovie($array) {
        return self::__construct($array[0], $array[1], $array[2], $array[4], 
                $array[5], $array[6], $array[7], $array[8]);
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getCategory() {
        return $this->category;
    }

    function getDuration() {
        return $this->duration;
    }

    function getDirector() {
        return $this->director;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }
   
}

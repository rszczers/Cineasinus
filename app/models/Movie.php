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

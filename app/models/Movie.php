<?php
class Movie implements Model {    
    private $name;
    private $category;
    private $duration;
    private $director;
    private $description;   
    private $plpremiere;
    private $id;
    private $fpremiere;
    private $poster;
    
    function __construct($array) {
        $this->name = $array['name'];
        $this->category = $array['category'];
        $this->duration = $array['duration'];
        $this->director = $array['director'];
        $this->description = $array['description'];
        $this->plpremiere = $array['plpremiere'];
        $this->id = $array['id'];
        $this->poster = $array['poster'];    
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
    
    function getPlpremiere() {
        return $this->plpremiere;
    }

    function getFpremiere() {
        return $this->fpremiere;
    }

    function getPoster() {
        return $this->poster;
    }
    
    function setId($id) {
        $this->id = $id;
    }
   
}

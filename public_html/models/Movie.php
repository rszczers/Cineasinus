<?php
class Movie {
    private $id;
    private $name;
    private $category;
    private $duration;
    private $director;
    private $description;    
    
    function __construct($id, $name, $category, $duration, $director, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->duration = $duration;
        $this->director = $director;
        $this->description = $description;
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

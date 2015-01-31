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
    
    function __construct($name, $category, $duration, $director,
            $description, $plpremiere, $id) {
        $this->name = $name;
        $this->category = $category;
        $this->duration = $duration;
        $this->director = $director;
        $this->description = $description;
        $this->plpremiere = $plpremiere;
        $this->id = $id;
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
    
    function sqlAdd() {
        $sql = "insert into `movies` "
                . "(`name`, `category`, `duration`, `director`,"
                . "`description`, `plpremiere`, `fpremiere`)"
                . " values (" .
                "'" . $this->name . "," .
                "'" . $this->category . "," .
                "'" . $this->duration . "," .
                "'" . $this->director . "," .
                "'" . $this->description . "," .
                "'" . $this->plpremiere . "," .
                "'" . $this->fpremiere . ")";
        return $sql;
    }
    
    function sqlRead($id) {
        $sql = "select * from `movies` where 'id' = " . 
            $this->id;
        return $sql;        
    }
    public function sqlRm() {
        $sql = "delete from `movies` where " .
            "'id' = " . $this->id;
        return sql;
    }
    
    public function sqlUpdate() {
        $sql = "update `movies`" .
               "set name = '" . $this->name . "'," .
               "category = '" . $this->category . "'," .
               "duration = '" . $this->duration . "'," .
               "director = '" . $this->director . "'" .
               "description = '" . $this->description . "'" .
               "plpremiere = '" . $this->plpremiere . "'" .
               "fpremiere = '" . $this->fpremiere . "' " .
               "where 'id' = " . $this->id;
        return $sql;
    }
}

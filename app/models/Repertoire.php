<?php
class Repertoire implements Model {
    private $movieid;    
    private $id;    
    private $date;
    private $price;
    
    function __construct($array) {
        $this->movieid = $array['movieid'];
        $this->id = $array['id'];        
        $this->date = $array['date'];
        $this->price = $array['price'];
    }
    
    function getMovieid() {
        return $this->movieid;
    }

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getPrice() {
        return $this->price;
    }

    function setMovieid($movieid) {
        $this->movieid = $movieid;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPrice($price) {
        $this->price = $price;
    }
    
}

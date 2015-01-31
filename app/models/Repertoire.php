<?php
class Repertoire implements Model {
    private $movieid;    
    private $id;
    private $city;
    private $cinemaname;
    private $date;
    private $price;
    
    function __construct($movieid, $id, $city, $cinemaname, $date, $price) {
        $this->movieid = $movieid;
        $this->id = $id;
        $this->city = $city;
        $this->cinemaname = $cinemaname;
        $this->date = $date;
        $this->price = $price;
    }
    
    public static function newRepertoire($array) {
        return self::__construct($array[0], $array[1], $array[2], $array[4], 
            $array[5]);
    }
    
    function getMovieid() {
        return $this->movieid;
    }

    function getId() {
        return $this->id;
    }

    function getCity() {
        return $this->city;
    }

    function getCinemaname() {
        return $this->cinemaname;
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

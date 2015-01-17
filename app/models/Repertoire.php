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
    
    function add2db() {
        
    }

    public function sql2db() {
        $sql = "insert into `repertoire` "
                . "(`movieid`, `city`, `cinemaname`,"
                . "`date`, `price`)"
                . " values (" .
                "'" . $this->movieid . "," .                
                "'" . $this->city . "," .
                "'" . $this->cinemaname . "," .
                "'" . $this->date . "," .
                "'" . $this->price . ")";
        return $sql;
    }

    function sqlRead($id) {
        
    }
    public function sqlRm() {
        ;
    }
    public function sqlUpdate() {
        ;
    }
}

<?php
class User implements Model {
    private $id;   
    private $email;
    private $rank;
    private $avatar;
    private $first;
    private $last;
    private $phone;    
    
    function __construct($array) {
        $this->id = $array[0];
        $this->passhash = $array[1];
        $this->email = $array[2];
        $this->rank = $array[3];
        $this->avatar = $array[4];
        $this->first = $array[5];
        $this->last = $array[6];
        $this->phone = $array[7];        
    }
    
    function getId() {
        return $this->id;
    }

    function getPasshash() {
        return $this->passhash;
    }

    function getEmail() {
        return $this->email;
    }

    function getRank() {
        return $this->rank;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getFirst() {
        return $this->first;
    }

    function getLast() {
        return $this->last;
    }

    function getPhone() {
        return $this->phone;
    }
    
    function setId($id) {
        $this->id = $id;
    }
}

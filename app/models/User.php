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
        $this->id = $array['id'];
        $this->passhash = $array['passhash'];
        $this->email = $array['email'];
        $this->rank = $array['rank'];
        $this->avatar = $array['avatar'];
        $this->first = $array['first'];
        $this->last = $array['last'];
        $this->phone = $array['phone'];        
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

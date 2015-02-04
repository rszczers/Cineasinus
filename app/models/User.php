<?php
class User implements Model {
    private $id;   
    private $email;
    private $rank;    
    private $first;
    private $last;
    private $phone;
    private $passhash;
    
    function __construct($array) {
        $this->id = $array['id'];
        $this->passhash = $array['passhash'];
        $this->email = $array['email'];
        $this->rank = $array['rank'];        
        $this->first = $array['first'];
        $this->last = $array['last'];
        $this->phone = $array['phone'];        
    }
    
    function getId() {
        return $this->id;
    }

    public function getPasshash() {
        return $this->passhash;
    }

    function getEmail() {
        return $this->email;
    }

    public function getRank() {
        return $this->rank;
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
        
    
    function setRank($rank) {
        $this->rank = $rank;
    }
    
   
}

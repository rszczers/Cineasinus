<?php
class User extends Model {
    private $id;
    private $passhash;
    private $email;
    private $rank;
    private $avatar;
    private $first;
    private $last;
    private $phone;    
    
    function __construct($id, $passhash, $email, $rank, $avatar, $first, $last, $phone) {
        $this->id = $id;
        $this->passhash = $passhash;
        $this->email = $email;
        $this->rank = $rank;
        $this->avatar = $avatar;
        $this->first = $first;
        $this->last = $last;
        $this->phone = $phone;
        $this->reservationid = $reservationid;
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

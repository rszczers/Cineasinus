<?php
class User implements Model {
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

    public function sqlAdd() {
        $sql = "insert into `users` "
                . "(`passhash`, `email`, `rank`,"
                . "`first`, `last`, `phone`)"                
                . " values (" .
                "'" . $this->passhhash . "," .                
                "'" . $this->email . "," .
                "'" . $this->rank . "," .                
                "'" . $this->first . "," .                
                "'" . $this->last . "," .                
                "'" . $this->phone . ")";
        return $sql;
    }

    function sqlRead() {
       $sql = "select * from `users` where 'id' = " . 
               $this->id;
       return $sql;
    }
    public function sqlRm() {
        $sql = "delete from `users` where " .
            "'id' = " . $this->id;
        return sql;
    }
    public function sqlUpdate() {
        $sql = "update `users`" .
               "set passhash = '" . $this->passhash . "'," .
               "email = '" . $this->email . "'," .
               "rank = '" . $this->rank . "'," .
               "first = '" . $this->first . "'" .
               "last = '" . $this->last . "'" .
               "phone = '" . $this->phone . "' " .               
               "where 'id' = " . $this->id;
        return $sql;
    }
}

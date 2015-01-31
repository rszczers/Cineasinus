<?php
class Reservation implements Model {
    private $id;
    private $userid;
    private $code;
    private $repertid;
    private $checked;
    
    function __construct($id, $userid, $code, $repertid, $checked) {
        $this->id = $id;
        $this->userid = $userid;
        $this->code = $code;
        $this->repertid = $repertid;
        $this->checked = $checked;
    }
    
    public static function newReservation($array) {
        return self::__construct($array[0], $array[1], $array[2], $array[4]);
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function getUserid() {
        return $this->userid;
    }

    function getCode() {
        return $this->code;
    }

    function getRepertId() {
        return $this->repertid;
    }
    
    function isChecked() {
        return $this->checked;
    }
}
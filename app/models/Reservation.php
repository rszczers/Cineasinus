<?php
class Reservation implements Model {
    private $id;
    private $userid;
    private $code;
    private $repertid;
    private $checked;
    
    function __construct($array) {
        $this->id = $array['id'];
        $this->userid = $array['userid'];
        $this->code = $array['code'];
        $this->repertid = $array['repertid'];
        $this->checked = $array['checked'];
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
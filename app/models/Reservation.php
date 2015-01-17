<?php
class Reservation implements Model {
    private $id;
    private $userid;
    private $code;
    private $repertid;
    
    function __construct($id, $userid, $code, $repertid) {
        $this->id = $id;
        $this->userid = $userid;
        $this->code = $code;
        $this->repertid = $repertid;
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

    function getRepertid() {
        return $this->repertid;
    }
    
    function add2db () {
        
    }

    public function get2db($id) {
        
    }

}

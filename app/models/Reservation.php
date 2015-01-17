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
    
    function sql2db () {
        $sql = "insert into `reservations` "
                . "(`userid`, `code`, `repertid`,"
                . "`checked`)"
                . " values (" .
                "'" . $this->userid . "," .                
                "'" . $this->code . "," .
                "'" . $this->repertid . "," .                
                "'" . $this->checked . ")";
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

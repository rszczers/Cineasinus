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
    
    function sqlAdd () {
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
        $sql = "select * from `reservations` where 'id' = " . 
               $this->id;
        return $sql;
    }
    public function sqlRm() {
        $sql = "delete from `reservation` where " .
            "'id' = " . $this->id;
        return sql;
    }
    public function sqlUpdate() {
        $sql = "update `reservation`" .
               "set userid = '" . $this->userid . "'," .
               "code = '" . $this->code . "'," .
               "repertid = '" . $this->repertid . "'," .
               "checked = '" . $this->checked . "'" .
               "where 'id' = " . $this->id;
        return $sql;
    }
        
    

}

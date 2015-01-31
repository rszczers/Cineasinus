<?php

abstract class Model {
    
    protected $db;
    
    function __construct() {        
        $this->db = DbAdapter::getInstance();
    }
        
    abstract function sqlAdd();
    abstract function sqlRm();
    abstract function sqlRead();
    abstract function sqlUpdate();       
    
    
}

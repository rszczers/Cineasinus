<?php
class Controller {
    private $dbAdapter;
    
    function __construct() {
        $this->dbAdapter = new dbAdapter();
    }
}

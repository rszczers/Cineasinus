<?php

require_once '../app/core/DbAdapter.php';

class Browse extends Controller {
    
    function __construct() {
        parent::__construct();
    }

    
    public function index() {        
        $this->view('browse/index', "title", array()); 
        print_r($this->fetch("select * from movies"));
    }
    
    /**
     * Reads all movies from database
     * @param type $perPage
     */
    public function all($perPage, $pageNo) {

    }    
    
    public function book($id) {
    }
    
}


<?php

require_once '../app/core/DbAdapter.php';

class Browse extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {        
        $this->view('browse/index', "title", array());         
        echo $this->db->length('movies');
    }
    
    /**
     * Reads all movies from database
     * @param type $perPage
     */
    public function fetch($perPage, $pageNo) {
        
    }    
    
    public function book($id) {
    }
    
}


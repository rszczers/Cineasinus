<?php

require_once '../app/core/DbAdapter.php';

class Browse extends Controller {
    public function index() {
        $db = new DbAdapter();
        $db->add();
        $this->view('browse/index', "title", array());        
    }    
}


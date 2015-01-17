<?php

class Error extends Controller {

    function __construct() {
        echo "error!";        
    }
    
    public function index() {
        $this->view('error/index', array('argument'));
    }

}


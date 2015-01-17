<?php

class Log extends Controller {
    /**
     * default page
     */
    public function index() {
        $this->view('log/index', "title", array('argument'));        
    }
    /**
     * login
     */
    public function in() {
        $this->view('log/login', "Logowanie", array('argument'));
    }
    /**
     * logout
     */
    public function out() {        
        $this->view('log/logout', "title", array('argument'));
    }
    
    public function register() {
        //here check if user already tried to register
        $this->view('log/logout', "Rejestracja", array('argument'));
    }
    
    

}


<?php

class Log extends Controller {
    /**
     * default page
     */
    public function index() {
        //check if logged
        $this->view('user/index', "title", array('argument'));        
    }
    /**
     * userin
     */
    public function in() {
        $this->view('user/login', "Logowanie", array('argument'));
    }
    /**
     * userout
     */
    public function out() {        
        $this->view('user/logout', "title", array('argument'));
    }
    
    public function register() {
        //here check if user already tried to register
        $this->view('user/register', "Rejestracja", array('argument'));
    }
    
    

}


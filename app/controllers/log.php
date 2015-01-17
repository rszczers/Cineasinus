<?php

class Log extends Controller {
   
    public function index() {
        $this->view('log/index', "title", array('argument'));        
    }
    
    public function in() {
        $this->view('log/login', "Logowanie", array('argument'));
    }
    
    public function out() {
        $this->view('log/logout', "title", array('argument'));
    }
    
        public function register() {
        $this->view('log/logout', "Rejestracja", array('argument'));
    }

}


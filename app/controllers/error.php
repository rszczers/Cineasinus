<?php
namespace app\controllers;
class Error extends Controller {

    public function index($depth) {
        $this->view('error/index', $depth);
    }
    
    public function failedLogin($depth) {
        $this->view('error/failedLogin', "title", $depth);
    }
}


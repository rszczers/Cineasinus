<?php

class Error extends Controller {

    function __construct() {
        $this->view->msg = "This page doesn't exist";
        $this->view->render('error/index');
    }

}


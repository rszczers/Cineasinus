<?php

require_once '../app/core/DbAdapter.php';

/**
 * Controller superclass; mediates data between models and views
 */
class Controller {    
    //create new model object
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';        
        return new $model();
    }
    
    //populate selected view with specified data
    protected function view($view, $title, $data = array()) {
        require_once '../app/views/' . $view . '.php';       
    }
}
<?php

require_once '../app/core/DbAdapter.php';

/**
 * Controller superclass; mediates data between models and views
 */
class Controller {
    private $db;
    
    function __construct() {
        $this->db = new DbAdapter();
    }

    //create new model object
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    
    //populate selected view with specified data
    protected function view($view, $title, $data = array()) {
        require_once '../app/views/' . $view . '.php';       
    }
    
    function fetch($sql) {        
        $sth = $this->db->prepare($sql);
        $sth->execute();
         
        $result = array();
        $row = $sth->fetch(PDO::FETCH_OBJ, PDO::FETCH_ORI_NEXT);
        while($row != null) {
            $result[] = $row;
            $row = $sth->fetch(PDO::FETCH_OBJ, PDO::FETCH_ORI_NEXT);
        }
        return $result;
    }
}
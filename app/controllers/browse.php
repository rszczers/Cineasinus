<?php
require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';
require_once '../app/models/Movie.php';


class Browse extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {        
        $this->view('browse/index', "title", array());
        
        $moviedao = new MoviesDAO();
        print_r($moviedao->populate());        
    }  
    
    public function book($id) {
    }
    
}



<?php
require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';
require_once '../app/views/MovieDetailsView.php';
require_once '../app/views/MoviePreviewView.php';
require_once '../app/core/View.php';

class Film extends Controller {
    private $mdao;
    
    function __construct() {
        $this->mdao = new MoviesDAO();   
        parent::__construct();        
    }
    
    public function index() {
        
    }
        
    public function details($arg) {                
        $movie = $this->mdao->findById($arg);
        $this->view('film/index', "O filmie", $movie);                        
    }   
}

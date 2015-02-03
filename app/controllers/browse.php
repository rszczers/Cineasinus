<?php
require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';

require_once '../app/views/MovieListView.php';
require_once '../app/views/MoviePreviewView.php';
require_once '../app/core/View.php';

class Browse extends Controller {
    private $mdao;
    
    function __construct() {
        $this->mdao = new MoviesDAO();
        parent::__construct();        
    }
    
    public function index() {        
        $data = $this->mdao->populateMovies();
        $this->view('browse/index', "Przeglądaj filmy", array('page' => $page, 'data' => $data));        
        
        
    }  
    
    public function book($id) {
    }
  
    
}
  

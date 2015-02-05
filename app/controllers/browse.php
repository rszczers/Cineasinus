s<?php
require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';
require_once '../app/views/MovieListView.php';
require_once '../app/views/MoviePreviewView.php';
require_once '../app/core/DbAdapter.php';
require_once '../app/models/IRepertoireDAO.php';
require_once '../app/models/RepertoireDAO.php';
require_once '../app/core/View.php';

class Browse extends Controller {
    private $mdao;
    private $rdao;
    
    function __construct() {
        $this->mdao = new MoviesDAO();
        $this->rdao = new RepertoireDAO();
        parent::__construct();        
    }
    
    public function index() {        
        $data = $this->mdao->populateMovies();
        $this->view('browse/index', "Przeglądaj filmy", array('page' => $page, 'data' => $data));
    }  
    
    public function book($id) {
    }
    
    public function repertoire($p = 0) {
        $movies = $this->rdao->getPage(5, $p);        
        $this->view('browse/repertoire', "Repertuar", array('movies' => $movies));
    }
}
  

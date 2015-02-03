<?php
require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';
require_once '../app/views/MovieListView.php';
require_once '../app/views/MoviePreviewView.php';
require_once '../app/core/View.php';
require_once '../app/controllers/ControllerHelper.php';



class Home extends Controller {
    private $mdao;
    
    function __construct() {
        $this->mdao = new MoviesDAO();
        parent::__construct();        
    }
    
    public function index() {                         
        $population = $this->mdao->count();        
        $randMatrix = ControllerHelper::randomRow(1, $population, 6);        
        $data = array();
        
        for($i=0; $i<6; $i++) {           
            $data[] = $this->mdao->findById($randMatrix[$i]);
        }        
        $this->view('home/index', "Cineasinus", array('page' => $page, 'data' => $data));  
    }        
}

<?php
require_once '../app/models/User.php';

require_once '../app/models/IMovieDAO.php';
require_once '../app/models/MoviesDAO.php';
require_once '../app/views/MovieListView.php';
require_once '../app/views/MoviePreviewView.php';

require_once '../app/core/DbAdapter.php';

require_once '../app/models/IRepertoireDAO.php';
require_once '../app/models/RepertoireDAO.php';
require_once '../app/views/RepertoireListView.php';

require_once '../app/models/User.php';

require_once '../app/models/IReservationDAO.php';
require_once '../app/models/ReservationDAO.php';
require_once '../app/views/ReservationListView.php';

require_once '../app/core/View.php';

class Browse extends Controller {
    private $mdao;
    private $rdao;
    private $redao;
    
    function __construct() {
        $this->mdao = new MoviesDAO();
        $this->rdao = new RepertoireDAO();
        $this->redao = new ReservationDAO();
        
        parent::__construct();        
    }
    
    public function index($i = 0) {        
        $data = $this->mdao->populateMovies();
        $perpage = 6;
        $previews = $this->mdao->getPage($perpage, $i);        
        $this->view('browse/index', "Przeglądaj filmy", array('perpage' => $perpage, 'data' => $data, 'previews' => $previews));
    }  
    
    public function book($id) {
        
    }
    
    public function repertoire($i = 0) {
        $perpage = 5;
        $data = $this->rdao->getPage($perpage, $i);        
        $this->view('browse/repertoire', "Repertuar", array('rep' => $data, 'perpage' => $perpage));
    }
    
    public function reservations($i = 0) {
        if(isset($_SESSION['userdata'])) {
            $user = unserialize($_SESSION['userdata']);            
            $perpage = 5;
            $reservations = $this->redao->getViaUserID($user->getId(), $perpage, $i);
            $this->view('browse/reservations', "Twoje rezerwacje", array('data' => $reservations));
        }
    }
}
  

<?php
require_once '../app/models/IUserDAO.php';
require_once '../app/models/UsersDAO.php';

class Log extends Controller {
    private $udao;
    
    function __construct() {
        $this->udao = new UsersDAO();
        parent::__construct();
    }

   /**
     * default page
     */
    public function index() {
        //check if logged
        $this->view('user/index', "Logowanie", null);        
    }
   /**
     * userin
     */
    public function in() {
        if(isset($_POST['email']) && isset($_POST['pass'])) {
            $auth = $this->verify();
            if(!is_null($auth)) {
                Session::set('userdata', $auth);
                $this->view('user/login', "Logowanie – zalogowany", array());
            } else {
                $this->view('user/login', "Logowanie – niepowodzenie", array());
            }
        } else {
            $this->view('user/login', "logowanie", null);        
        }
    }
    /**
     * userout
     */
    public function out() {        
        $this->view('user/logout', "Do zobaczenia!", null);
        Session::destroy();
    }
    
    public function register() {
        //here check if user already tried to register
        $this->view('user/register', "Rejestracja", array('argument'));
    }
    
    /**
     * Verify user
     */    
    private function verify() {        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $hash = sha1(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));        
        $tmp = $this->udao->findByLoginAndPass($email, $hash);        
        if(!is_null($tmp)) {
            return $tmp;
        }
        return null;
    }
    

}


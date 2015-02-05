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
        $this->view('account/index', "Logowanie", null);        
    }
   /**
     * userin
     */
    public function in() {
        if(isset($_POST['email']) && isset($_POST['pass'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);                
            $hash = sha1(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));
            unset($_POST['email']);
            unset($_POST['pass']);
            
            Session::set('email', $email);
            Session::set('hash', $hash);
            
            $auth = $this->verify($email, $hash);            
            if(!is_null($auth)) {
                Session::set('userdata', serialize($auth));
                // $url = "http:\\" . App::ABS_PATH;                
                $url = "..";
                $this->view('redirect', "Logowanie…", array('heading' => 'Trwa logowanie…', 'url'=>$url,
                    'redirect' => true, 'content' => 'Proszę chwileczkę poczekać'));
            } else {
                $this->view('account/login', "Logowanie – niepowodzenie", null);
            }
        } else if($_POST['tried']==1) {
            $this->view('account/login', "Logowanie", null);        
        } else {
            $this->view('account/login', "Logowanie – Błąd", null);        
        }
    }
    /**
     * userout
     */
    public function out() {        
        Session::destroy();
        $url = "..";
        $this->view('redirect', "Wylogowywanie…", array('heading' => 'Trwa wylogowywanie…', 'url'=>$url,
                    'redirect' => true, 'content' => 'Proszę chwileczkę poczekać'));
    }
   
    /**
     * Verify user
     */    
    private function verify($email, $hash) {        
        $tmp = $this->udao->findByLoginAndPass($email, $hash);        
        if(!is_null($tmp)) {
            return $tmp;
        }
        return null;
    }
    

}


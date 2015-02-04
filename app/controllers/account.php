<?php
require_once '../app/models/IUserDAO.php';
require_once '../app/models/UsersDAO.php';
require_once '../app/controllers/ControllerHelper.php';

class Account extends Controller {
    private $udao;
    
    function __construct() {
        $this->udao = new UsersDAO();
    }

    public function changeName($first) {        
    }
    
    public function changeSurname($last) {        
    }        
    
    public function addReservation($id) {        
    }
    
    public function rmReservation($id) {        
    }
    
    public function register() {
        if(isset($_SESSION['userdata']))
            $this->view('account/error', "Rejestracja – Błąd", 'alreadyLogged');
        else {
            $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
            $last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $emailCheck = filter_input(INPUT_POST, 'emailcheck', FILTER_SANITIZE_STRING);
            $hash = sha1(filter_input(INPUT_POST, 'hash', FILTER_SANITIZE_STRING));
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);            
            if(!is_null($first) && 
                    !is_null($last) && 
                    !is_null($email) && 
                    !is_null($hash) && 
                    !is_null($phone)) {
                    if(strcmp($email, $emailCheck)) {
                        /**
                                            *  Here goes part where new user is added to database
                                            */                                     
                        $array = array('email' => $email,
                            'rank' => 0,
                            'first' => $first,
                            'last' => $last,
                            'phone' => $phone,
                            'passhash' => $hash,
                            'id' => 0
                        );
                        $newUser = new User($array);                        
                        $newId = $this->udao->add($newUser);

                        $newUser->setId($newId);                        
                        
                        $hash = ControllerHelper::userhash();
                        
                        // here activation data is being sent to database
                        $this->udao->toActivate($newUser->getId(), $hash);
                                
                        $msg = $this->generateWelcome($newUser, $hash);
                        ControllerHelper::sendmail($email, "Potwierdzenie rejestracji", $msg);                       
                        $this->view('account/registered', "Rejestracja", "Success");

                    } else {
                        $this->view('account/error', "Rejestracja", "Podane hasła różnią się.");
                    }
            } else {
                $this->view('account/error', "Rejestracja", "Nie wypełniono wszystkich pól");
            }
        }
    }
    
    public function activate($hash) {
        $this->udao->activateByHash($hash);
    }
    
    
    public function generateWelcome($user, $hash) {
        return "Witaj ". $user->getFirst() . " ". $user->getLast() . "!\n\n" .
        "Aby korzystać z naszego serwisu kliknij na poniższy link aktywacyjny:\n" 
        . "http://" . App::ABS_PATH ."account/activate/" . $hash;
    }
    
}

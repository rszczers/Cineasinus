<?php
/**
 * Authorisation
 */

class Auth {
    public static function handleLogged() {
        session_start();
        $checkLog = $_SESSION['loggedIn'];
        if($checkLog == false) {
            session_destroy();
            header("location: ../login");
            exit;
        }
    }
}

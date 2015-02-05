<?php
require_once '../app/models/User.php';

class UsersDAO implements IUserDAO{
    private $db;
    
    function __construct() {
        $this->db = \DbAdapter::getInstance();        
    }
    
    public function add($user) {        

        $pdo = new PDO(App::DSN, App::DBLOGIN, App::DBPASS);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "insert into `users` "
                . "(`passhash`, `email`, `rank`, "
                . "`first`, `last`, `phone`)"                
                . " values ("
                . ":passhash, "
                . ":email, "
                . ":rank, "
                . ":first, "
                . ":last, "
                . ":phone );";

        $stmt = $pdo -> prepare($sql);
        
        $stmt -> bindValue(':passhash', $user->getPasshash(), PDO::PARAM_STR);
        $stmt -> bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt -> bindValue(':rank', $user->getRank(), PDO::PARAM_INT);
        $stmt -> bindValue(':first', $user->getFirst(), PDO::PARAM_STR);
        $stmt -> bindValue(':last', $user->getLast(), PDO::PARAM_STR);
        $stmt -> bindValue(':phone', $user->getPhone(), PDO::PARAM_INT);
        
        $stmt ->execute();
                      
        $sql = "SELECT * FROM users WHERE first = '" . $user->getFirst() .
            "' AND last = '" . $user->getLast() . "' AND email = '" . $user->getEmail().
            "' AND phone = '" . $user->getPhone() . "';";        

        $result = $this->db->execQuery($sql);                                    
        $result = $result[0]['id'];
        return $result;                    
    }

    public function chRole($user, $role) {
        $user->setRank($role);
        $sql = $this->sqlUpdate($user);
        try {
            $this->db->execQuery($sql);
        } catch (Exception $ex) {

        }
    }

    public function delete($user) {
        $sql = $this->sqlRm($user);
        $this->db->execQuery($sql);
    }

    public function edit($user) {
        $sql = $this->sqlUpdate($user);
        $this->db->execQuery($sql);
    }

    public function getAvatar($args) {
        
    }

    public function getViaEmail($args) {
        
    }

    public function getViaFirst($args) {
        
    }

    public function getViaId($args) {
        
    }

    public function getViaLast($args) {
        
    }

    public function getViaPasshash($args) {
        
    }

    public function getViaPhone($args) {
        
    }

    public function getViaRank($args) {
        
    }

    public function getViaRole($args) {
        
    }

    public function sqlRead($user) {
       $sql = "select * from `users` where 'id' = " . 
               $user->getId();
       return $sql;
    }
    public function sqlRm($user) {
        $sql = "delete from `users` where " .
            "'id' = " . $user->getId();
        return sql;
    }
    
    public function sqlUpdate($user) {
        $sql = "update `users` " .
               "set passhash = '" . $user->getPasshash() . "', " .
               "email = '" . $user->getEmail() . "', " .
               "id = '" . $user->getId() . "', " .
               "rank = '" . $user->getRank() . "', " .
               "first = '" . $user->getFirst() . "', " .
               "last = '" . $user->getLast() . "', " .
               "phone = '" . $user->getPhone() . "' " .               
               "where id = '" . $user->getId() . "';";
        return $sql;
    }

    public function populate() {
        $sql = "SELECT * FROM `users`";
        $tmp = $this->db->execQuery($sql);
        
        $result = array();
        foreach($tmp as $key => $row) {                        
            $result[] = new User($row);
        }
        return $result;
    }
    
  /**
     * This method is a junk, sorry.
     * @param type $email
     * @param type $hash
     * @return \User
     */
    public function findByLoginAndPass($email, $hash) {
        $sql = "SELECT * FROM `users` WHERE email='" . $email . 
                "' AND passhash='" . $hash . "'";
        $array = $this->db->execQuery($sql);
        if(!is_null($array[0]['id'])) {
            return new User($array[0]);
        }
        return null;
    }
    
    public function findById($id) {
        $sql = "SELECT * FROM `users` WHERE id='" . $id . "';";
        
        $array = $this->db->execQuery($sql);
        
        if(!is_null($array[0]['id'])) {
            return new User($array[0]);
        }
        return null;
    }
    
    public function toActivate($userid, $hash) {
        try {
            $sql = "insert into `activation` (`userid`, `hash`) values ("
                . "'" . $userid . "', '" . $hash . "');";
        $this->db->execQuery($sql);
        } catch (Exception $e) {}
    }
    
    public function activateByHash($hash) {
        $sql = "select * from `activation`;";
        $result = $this->db->execQuery($sql);
        $userid = $result[0]['userid'];
        $user = $this->findById($userid);        
        if( $user->getRank() == 0) {
            $this->chRole($user, 1);
        }
    }

}

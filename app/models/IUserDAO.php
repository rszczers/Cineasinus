<?php
interface IUserDAO {
    public function getViaId($args);
    public function getViaPasshash($args);
    public function getViaEmail($args);
    public function getViaRank($args);
    public function getAvatar($args);
    public function getViaFirst($args);
    public function getViaLast($args);
    public function getViaPhone($args);
    public function getViaRole($args);
       
    public function add($arg);
    public function edit($arg);
    public function delete($arg);
    public function chRole($user, $role);
    
    public function populate();
}

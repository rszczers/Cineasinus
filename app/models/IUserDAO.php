<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author rszczers
 */
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

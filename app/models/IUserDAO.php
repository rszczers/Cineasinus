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
    public static function getViaId($args);
    public static function getViaPasshash($args);
    public static function getViaEmail($args);
    public static function getViaRank($args);
    public static function getAvatar($args);
    public static function getViaFirst($args);
    public static function getViaLast($args);
    public static function getViaPhone($args);
    public static function getViaRole($args);
       
    public static function add($arg);
    public static function edit($arg);
    public static function delete($arg);
    public static function chRole($arg);
}

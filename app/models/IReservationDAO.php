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
interface ReservationDAO { 
    public static function getId($arg);
    public static function getUserID($arg);
    public static function getCode($arg);
    public static function getRepertID($arg);
    public static function isChecked($arg);
    
    public static function check($arg);
    public static function add($arg);
    public static function remove($arg);    
}

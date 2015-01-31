<?php
interface IReservationDAO { 
    public static function getViaId($arg);
    public static function getViaUserID($arg);
    public static function getViaCode($arg);
    public static function getViaRepertID($arg);
    public static function isChecked($arg);
    
    public static function check($arg);
    public static function add($arg);
    public static function remove($arg);    
}

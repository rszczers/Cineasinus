<?php

interface IRepertoireDAO {    
    public static function getViaMovieId($arg);
    public static function getViaId($arg);
    public static function getViaCity($arg);
    public static function getViaCinemaName($arg);
    public static function getViaDate($arg);
    public static function getViaPrice($arg);
    
    public static function populate();
    
    public static function add($movie);
    public static function remove($movie);
    public static function edit($movie);    
}

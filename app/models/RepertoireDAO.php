<?php

interface RepertoireDAO {    
    public static function getViaMovieId();
    public static function getViaId();
    public static function getViaCity();
    public static function getViaCinemaName();
    public static function getViaDate();
    public static function getViaPrice();
    
    public static function populate();
    
    public static function remove();
    public static function edit();    
}

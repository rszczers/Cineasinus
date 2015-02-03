<?php
interface IRepertoireDAO {    
    public function getViaMovieId($arg);
    public function getViaId($arg);
    public function getViaCity($arg);
    public function getViaCinemaName($arg);
    public function getViaDate($arg);
    public function getViaPrice($arg);
    
    public function populate();
    
    public function add($movie);
    public function remove($movie);
    public function edit($movie);    
}

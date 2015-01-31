<?php
interface IReservationDAO { 
    public function getViaId($arg);
    public function getViaUserID($arg);
    public function getViaCode($arg);
    public function getViaRepertID($arg);
    public function isChecked($arg);
    
    public function check($arg);
    public function add($arg);
    public function remove($arg);    
}

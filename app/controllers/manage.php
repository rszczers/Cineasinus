<?php
class Manage extends Controller {
    public function addMovie($movie) {
        $movie->sqlAdd();
    }
    
    public function delMovie($movie) {
        $movie->sqlRm();
    }        
    
    public function showMovieRes($movie) {
                    
    }
    
    public function showUsersRes($userid) {
        
    }
    
    public function showRepertIDRes($userid) {
        
    }
    
    
    
    
}

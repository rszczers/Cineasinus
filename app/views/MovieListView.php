<?php
class MovieListView implements View{
    private $lenght;    
    private $perPage;
    
    function __construct($lenght, $perPage) {
        $this->lenght = $lenght;
        $this->perPage = $perPage;
    }

    public function show() {        
    }

}

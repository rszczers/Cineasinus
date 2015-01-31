<?php
class MovieListView implements View{
    private $data;
    
    function __construct($data) {
        $this->data = $data;
    }
    
    public function show($data) {
        echo "<table class=\"table table-hover\">";
        echo "";
        echo "";
        echo "</table>";
    }

}

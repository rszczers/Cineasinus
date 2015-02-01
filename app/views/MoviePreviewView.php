<?php
class MoviePreviewView implements View {
    private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show($data) {
        echo "<div class=\"col-md-4\">";
        echo "<h3>" . $data->getName() 
            . "<br><small>" . $data->getDirector() 
            . "</small></br>"    
            . "</h3>";
        echo "<img style=\"max-height:250px\" src=" . $data->getPoster() 
            . " class=\"img-responsive\">";
        echo "</div>";
    }
}
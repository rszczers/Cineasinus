<?php
class MoviePreviewView implements View {
    private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show($data) {
        echo "<div class=\"col-md-4\">";
        echo "<h3>" . $data['name']
            . "<br><small>" . $data['director'] 
            . "</small></br>"    
            . "</h3>";
        echo "<img src=" . $data['poster']
            . " class=\"img-responsive\">";
        echo "</div>";
    }
}
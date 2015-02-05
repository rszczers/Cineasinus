<?php
class MoviePreviewView implements View {
    private $title;
    private $director;
    private $poster;
    private $description;
    private $id;
    
    function __construct($movie) {
        $this->title = $movie->getName();
        $this->director = $movie->getDirector();
        $this->poster = $movie->getPoster();
        $this->description = $movie->getShortDescription();
        $this->id = $movie->getId();
        $this->show();
    }

    public function show() {
        echo "<div class=\"col-md-4\">";
        echo "<h3>" . $this->title 
            . "<br><small>" . $this->director
            . "</small></br>"    
            . "</h3>";
        echo "<a href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->id .  "\">"
        . "<img  src=http://" . App::ABS_PATH . $this->poster 
            . " class=\"img-responsive previewImg\"></a>";        
        echo "<p>" . $this->description . 
                " <a href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->id .  "\">(więcej)</a>" .
                "</p>";
        echo "</div>";
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setPoster($poster) {
        $this->poster = $poster;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setId($id) {
        $this->id = $id;
    }

}
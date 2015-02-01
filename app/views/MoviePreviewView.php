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
        echo "<img style=\"max-height:250px\" src=http://" . App::ABS_PATH . $this->poster 
            . " class=\"img-responsive previewImg\">";
        echo "<p>" . $this->description . 
                " <a href=\"http://" . App::ABS_PATH
                . "Film/" . $this->id .  "\"\>(więcej)</a>" .
                "</p>";
        echo "</div>";
    }

}
<?php
class MovieDetailsView implements View {
    private $title;
    private $poster;
    private $director;
    private $category;
    private $duration;    
    private $plot;
    private $plpremiere;
    private $fpremiere;
    
    function __construct($movie) {
        $this->title = $movie->getName();
        $this->poster = $movie->getPoster();
        $this->director = $movie->getDirector();
        $this->category = $movie->getCategory();
        $this->duration = $movie->getDuration();        
        $this->plot = $movie->getDescription();
        $this->plpremiere = $this->parsePremiere($movie->getPlPremiere());
        $this->fpremiere = $this->parsePremiere($movie->getFPremiere());
        $this->show();
    }

    public function show() {
        echo "<div class=\"col-md-4\">" 
        . " <img class=\"img-responsive\" src=\"http://" . APP::ABS_PATH . $this->poster ."\">"                          
        . "</div>" 
        . "<div class=\"col-md-8\">" 
        . "<h1>". $this->title ."<br><h3>" . $this->getYear() . "</h3></br>"                
        . "<p>" . $this->plot . "</p>"
        . "<br>reżyseria: " . $this->director . "</br>"
        . "<br>gatunek: " . $this->category . "</br>"
        . "<br>premiera:  $this->plpremiere (Polska), $this->fpremiere (Świat)</br>"
    . "</div>";
    }
    
    private function getYear() {
        $tmp = explode("-", $this->fpremiere);
        return $tmp[2];
    }
    
    private function parsePremiere($arg) {
        $tmp = date_parse($arg);
        return $tmp['day'] . "-" . $tmp['month'] ."-". $tmp['year'];
    }
}


<?php
class MovieListView implements View {
    private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show() {
        echo "<table class=\"table table-hover\">";
        echo "<thead><tr>";
        echo "<th>Nazwa filmu</th>";
        echo "<th>Kategoria</th>";
        echo "<th>Reżyser</th>";
        echo "<th>Długość</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        foreach($this->data as $key => $movie) {
            echo "<tr>";
            echo "<td>";
            echo $movie->getName();
            echo "</td>";
            echo "<td>";
            echo $movie->getCategory();
            echo "</td>";
            echo "<td>";
            echo $movie->getDirector();
            echo "</td>";
            echo "<td>";
            echo $movie->getDuration() . "min";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

}
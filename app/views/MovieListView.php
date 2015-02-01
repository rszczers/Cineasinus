<?php
class MovieListView implements View {
    private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show($data) {
        echo "<table class=\"table table-hover\">";
        echo "<thead><tr>";
        echo "<th>Nazwa filmu</th>";
        echo "<th>Kategoria</th>";
        echo "<th>Reżyser</th>";
        echo "<th>Długość</th>";
        echo "</thead></tr>";
        echo "<tbody>";
        foreach($data as $key => $row) {
            echo "<tr>";
            echo "<td>";
            echo $row['name'];
            echo "</td>";
            echo "<td>";
            echo $row['category'];
            echo "</td>";
            echo "<td>";
            echo $row['director'];
            echo "</td>";
            echo "<td>";
            echo $row['duration'] . "min";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

}
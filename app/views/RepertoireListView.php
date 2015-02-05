<?php
class RepertoireListView implements View {
    private $ids = array();
    private $titles = array();
    private $dates = array();
    private $times = array();
    private $durations = array();
    private $prices = array();
        
    function __construct($arg) {
        for($i=0; $i<count($arg['movies']); $i++) {
            $this->ids[] = $arg['movies'][$i]->getId();
            $this->titles[] = $arg['movies'][$i]->getName();
            $this->dates[] = $this->parseDate($arg['repertoire'][$i]->getDate());
            $this->times[] = $this->parseTime($arg['repertoire'][$i]->getDate());
            $this->durations[] = $arg['movies'][$i]->getDuration();
            $this->prices[] = number_format((float)$arg['repertoire'][$i]->getPrice(), 2, ',', '');  
        }        
        $this->show();
    }

    public function show() {
        echo "<table class=\"table table-hover\ data-link=\"row\">";
        echo "<thead><tr>";
        echo "<th>Tytuł</th>";
        echo "<th>Data</th>";
        echo "<th>Godzina</th>";
        echo "<th>Długość</th>";
        echo "<th>Cena</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        for($i=0; $i<count($this->titles); $i++) {            
            echo "<tr>";
            echo "<td>";            
            echo "<a href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->ids[$i] .  "\">";
            echo $this->titles[$i];
            echo "</a>";
            echo "</td>";
            echo "<td>";
            echo $this->dates[$i];
            echo "</td>";
            echo "<td>";
            echo $this->times[$i];
            echo "</td>";
            echo "<td>";
            echo $this->durations[$i] . "min";
            echo "</td>";
            echo "<td>";
            echo $this->prices[$i] . "zł";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

    private function parseDate($arg) {
        $tmp = date_parse($arg);
        return $tmp['day'] . "-" . $tmp['month'] ."-". $tmp['year'];
    }
    
    private function parseTime($arg) {
        $tmp = date_parse($arg);
        return $tmp['hour'] . "-" . $tmp['minute'];
    }
}
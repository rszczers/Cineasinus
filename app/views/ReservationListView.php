<?php
class ReservationListView implements View {
    private $title;
    private $code;
    private $time;
    private $date;
    private $checked;
        
    function __construct($arg) {
        for($i=0; $i<count($arg['title']); $i++) {
            $this->title=$arg['movies'][$i]->getName();
            $this->code=$arg['reservations'][$i]->getCode();
            $this->time=$this->parseTime($arg['repertoire'][$i]->getDate());
            $this->date = $this->parseDate($arg['repertoire'][$i]->getDate());
            $this->checked = $arg['reservations'][$i]->isChecked();
        }        
        $this->show();
    }

    public function show() {
        echo "<table class=\"table table-hover\">";
        echo "<thead><tr>";
        echo "<th>Tytuł</th>";
        echo "<th>Kod rezerwacji</th>";
        echo "<th>Data</th>";
        echo "<th>Godzina</th>";
        echo "<th>Potwierdzenie</th>";
        echo "</tr></thead>";
        echo "<tbody data-link=\"row\" class=\"rowlink\">";
        for($i=0; $i<count($this->titles); $i++) {            
            echo "<tr class=\"clickableRow\" href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->ids[$i] .  "\">";
            echo "<td>";            
            echo "<a href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->ids[$i] .  "\">";
            echo $this->titles[$i];
            echo "</a>";
            echo "</td>\n";
            echo "<td>";
            echo $this->dates[$i];
            echo "</td>\n";
            echo "<td>";
            echo $this->times[$i];
            echo "</td>\n";
            echo "<td>";
            echo $this->durations[$i] . "min";
            echo "</td>\n";
            echo "<td>";
            echo $this->prices[$i] . "zł";
            echo "</td>\n";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

    private function parseDate($arg) {
        $tmp = date_parse($arg);
        if(strlen($tmp['day'])==1) {
            $tmp['day'] = '0' . $tmp['day'];
        }
        if(strlen($tmp['month'])==1) {
            $tmp['month'] = '0' . $tmp['month'];
        }
        return $tmp['day'] . "-" . $tmp['month'] ."-". $tmp['year'];
    }
    
    private function parseTime($arg) {
        $tmp = date_parse($arg);
        if(strlen($tmp['minute'])==1) {
            $tmp['minute'] = '0' . $tmp['minute'];
        }
        if(strlen($tmp['hour'])==1) {
            $tmp['hour'] = '0' . $tmp['hour'];
        }
        return $tmp['hour'] . ":" . $tmp['minute'];
    }
}
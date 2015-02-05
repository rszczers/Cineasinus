<?php
class ReservationListView implements View {
    private $movieid = array();
    private $title = array();
    private $code = array();
    private $time = array();
    private $date = array();
    private $checked = array();
        
    function __construct($arg) {
        for($i=0; $i<count($arg['movies']); $i++) {
            $this->movieid[] = $arg['movies'][$i]->getId();
            $this->title[] = $arg['movies'][$i]->getName();
            $this->code[] = $arg['reservations'][$i]->getCode();
            $this->time[] = $this->parseTime($arg['repertoire'][$i]->getDate());
            $this->date[] = $this->parseDate($arg['repertoire'][$i]->getDate());
            $this->checked[] = $this->checkParse($arg['reservations'][$i]->isChecked());
                    
                    
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
        for($i=0; $i<count($this->title); $i++) {            
            echo "<tr class=\"clickableRow\" href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->movieid[$i] .  "\">";
            echo "<td>";            
            echo "<a href=\"http://" . App::ABS_PATH
                . "film/details/" . $this->movieid[$i] .  "\">";
            echo $this->title[$i];
            echo "</a>";
            echo "</td>\n";
            echo "<td>";
            echo $this->code[$i];
            echo "</td>\n";
            echo "<td>";
            echo $this->date[$i];
            echo "</td>\n";
            echo "<td>";
            echo $this->time[$i];
            echo "</td>\n";
            echo "<td>";
            echo $this->checked[$i];
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
    
    private function checkParse($arg) {
        if($arg==1) {
            return 'Tak';
        } else {
            return 'Nie';
        }
    }
}
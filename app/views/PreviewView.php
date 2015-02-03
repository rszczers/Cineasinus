<?php
class PreviewListView implements View {
    private $howMany;
    private $dbCount;
    
    function __construct($howMany, $count) {
        $this->howMany = $howMany;
        $this->dbCount = 
        $this->show();
    }
    
    
    public function show() {
        $random = $this->randomRow(0, $this->dbCount, $this->howMany);
        foreach($random as $key => $value) {
            if($key%3 == 0) {
                echo "<div class=\"row\">";
            }
            new MoviePreviewView($movie)
            if($key%3 == 0) {
                echo "</div>";
            }
        }
    }
    


}

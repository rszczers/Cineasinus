<?php
class MakeReservationView implements View{
   private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show() {
    
    echo "<div class=\"container\">
    <form class=\"form-horizontal\">
    <div class=\"form-group\">
        <label for=\"name\" class=\"col-sm-2 control-label\">Imię</label>
        <div class=\"col-sm-5\">
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"imię\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"surname\" class=\"col-sm-2 control-label\">Nazwisko</label>
        <div class=\"col-sm-5\">
            <input type=\"text\" class=\"form-control\" id=\"nazwisko\" placeholder=\"nazwisko\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\" class=\"col-sm-2 control-label\">Adres email</label>
        <div class=\"col-sm-5\">
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"adres email\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"phone\" class=\"col-sm-2 control-label\">Numer telefonu</label>
        <div class=\"col-sm-5\">
            <input type=\"number\" class=\"form-control\" id=\"phone\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"movie\" class=\"col-sm-2 control-label\">Tytuł filmu</label>
        <div class=\"col-sm-5\">
            <input type=\"text\" class=\"form-control\" id=\"movie\" placeholder=\"tytuł\">
        </div>
    </div>
        
    <div class=\"form-group\">
        <label for=\"data\" class=\"col-sm-2 control-label\">Data</label>
        <div class=\"col-sm-3\">
            <input type=\"date\" class=\"form-control\" id=\"data\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"time\" class=\"col-sm-2 control-label\">Godzina</label>
        <div class=\"col-sm-3\">
            <input type=\"time\" class=\"form-control\" id=\"time\" placeholder=\"tytuł\">
        </div>
    </div>
        
    <div class=\"form-group\">
        <label for=\"howMany\" class=\"col-sm-2 control-label\">Ilość biletów</label>
        <div class=\"col-sm-2\">
            <select class=\"form-control\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
    
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-default\">Rezerwuj</button>
        </div>
    </div>
</form>
</div>";
}

}
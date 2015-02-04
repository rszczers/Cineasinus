<?php
class EditRepertoire implements View{
    private $movies;
    
    function __construct($data) {
        $this->movies = $data;
        $this->show();
    }
    
    public function show() {
        echo "<div class=\"container\">
       
        <form class=\"form-inline\">
            <div class=\"form-group\">
                <label for=\"date\">Data</label>
                <input type=\"date\" class=\"form-control\" id=\"date\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Pokaż repertuar</button>
        </form>        
        </div>
    
        <div class=\"container\">
        <div class=\"col-sm-7\">
        <div class=\"page-header\">
            <h1>Usuń z repertuaru</h1>      
        </div>
        <table class=\"table table-condensed\">
        <thead><tr>
            <th>Nazwa filmu</th>
            <th>Kategoria</th>
            <th>Godzina</th>
            <th>Długość</th>
            <th> </th>
            </tr></thead>
            <tr>
            <td>
            Film który jest w repertuarze
            </td>
            <td>
            Kategoria tego filmu
            </td>
            <td>
            Godzina
            </td>
            <td>
            Długość
            </td>
            <td> <button type=\"submit\" class=\"btn btn-default\">Usuń</button></td>
        </table>
        </div>
        <div class=\"container\">
        <div class=\"col-sm-7\">
            <div class=\"page-header\">
                <h1>Dodaj do repertuaru</h1>      
            </div>
            <form class=\"form-horizontal\">
            <div class=\"form-group\">
                <label for=\"movies\" class=\"col-sm-2 control-label\">Filmy</label>
                <div class=\"col-sm-10\">
                    <select multiple class=\"form-control\" id=\"movies\">
                        <option>Film1</option>
                        <option>Film 2</option>
                        <option>Super film 3</option>
                        <option>Jeszcze lepszy film 4</option>
                        <option>Noc oczyszczenia 5</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"time\" class=\"col-sm-2 control-label\">Godzina</label>
                <div class=\"col-sm-10\">
                    <input type=\"time\" class=\"form-control\" id=\"time\" >
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"room\" class=\"col-sm-2 control-label\">Sala</label>
                <div class=\"col-sm-10\">
                    <input type=\"number\" class=\"form-control\" id=\"room\" placeholder=\"sala\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"amount\">Cena</label>
                <div class=\"col-sm-4\">
                <div class=\"input-group\">
                    <input type=\"number\" class=\"form-control\" id=\"amount\" placeholder=\"\">
                <div class=\"input-group-addon\">.00 zł</div>
                </div>
            </div>
            </div>
            <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">Dodaj film</button>
            </div>
            </div>
        </form>               
        </div>
        </div>
        </div>";
        
    }
}
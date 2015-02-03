<?php
class EditFilm implements View{
   private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show();
    }
    
    public function show() {
        echo "Czy działa?";
  echo "<div class=\"container\"> 
        <form class=\"form-horizontal\">

        <div class=\"form-group\">
        <label for=\"title\" class=\"col-sm-2 control-label\">Tytuł</label>
        <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\" ";
  echo $this->getName();
  echo "\">
        </div></div>
  
        <div class=\"form-group\">
        <label for=\"director\" class=\"col-sm-2 control-label\">Reżyseria</label>
        <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" id=\"director\" placeholder=\" ";
  echo $this->getDirector();
  echo "\">
        </div>
        </div>
  
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">Gatunek</label>
        <div class=\"col-sm-10\">
        <select class=\"form-control\" id=\"sel1\">
            <option>nie</option>
            <option>wiem</option>
            <option>jakie</option>
            <option>mamy</option>
            <option>gatunki</option>
        </select>
        </div>
    </div> 
  
  
    <div class=\"form-group\">
        <label for=\"prepierePL\" class=\"col-sm-2 control-label\">Data premiery polskiej</label>
        <div class=\"col-sm-10\">
            <input type=\"date\" class=\"form-control\" id=\"premierePL\" placeholder=\"Premiera polska\">
        </div>
    </div>
  
    <div class=\"form-group\">
        <label for=\"premiereF\" class=\"col-sm-2 control-label\">Data premiery zagranicznej</label>
        <div class=\"col-sm-10\">
             <input type=\"date\" class=\"form-control\" id=\"premiereF\" value=\" ";
  echo "\">
        </div>
    </div>
    <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">Opis</label>
    <div class=\"col-sm-10\">
    <textarea class=\"form-control\" rows=\"3\" placeholder=\" ";
echo $this->getDescription();     
echo "\"></textarea>
    </div>
</div>
    <div class=\"form-group\">
    <label for=\"prepierePL\" class=\"col-sm-2 control-label\">Plakat</label>
    <div class=\"col-sm-10\">
            <div class=\"input-group\">
             <input type=\"text\" class=\"form-control\" readonly>
                <span class=\"input-group-btn\">
                    <span class=\"btn btn-default btn-file\">
                        Przeglądaj
                    </span>
                </span>
               </div>
     </div>
     </div>
<br>
<hr>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Dodaj film</button>
    </div>
  </div>
</form>

</div>";
    
    }

}


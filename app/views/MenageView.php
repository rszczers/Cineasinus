<?php

class MenageView implements View{
 private $data;
    
    function __construct($data) {
        $this->data = $data;
        $this->show($data);
    }
    
    public function show() {
       
   echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-3\">
        
            <div class=\"btn-group-vertical\" role=\"group\" aria-label=\"...\">
            <div class=\"btn-group\" role=\"group\">
                <button type=\"button\" class=\"btn btn-default btn-lg dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    Zarządzaj filmami
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Dodaj film</a></li>
                    <li><a href=\"#\">Edytuj/ usuń film</a></li>
                </ul>
            </div>
     
            <div class=\"btn-group\" role=\"group\">
                <button type=\"button\" class=\"btn btn-default btn-lg dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    Zarządzaj rezerwacjami
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Dodaj rezerwację</a></li>
                    <li><a href=\"#\">Edytuj/usuń rezerwację</a></li>
                </ul>
            </div>
        
        <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" href=\"#\">Zarządzaj użytkownikami</button>
        <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" href=\"#\">Edytuj repertuar</button>
        </div>
    </div>
     <div class=\"col-sm-9\">";
   
  
     new EditRepertoire($this->data);
   
       /*     <table class=\"table table-condensed\">
        <thead><tr>
            <th>Nazwa filmu</th>
            <th> </th>
            <th> </th> 
            </tr>
            </thead>";
    foreach ($this->data as $key=>$movie){
        echo    "<tr>
            <td>";
  
        echo $movie->getName();
        echo   "</td>
            <td> 
                <button type=\"submit\" class=\"btn btn-default\">Edytuj</button>
            </td>
            <td> 
                <button type=\"submit\" class=\"btn btn-default\">Usuń</button>
            </td>
            </tr>";
           
             }
            
        echo "</table>
        </div>
    </div> */     
       echo "</div>"
     . "</div>";

    
    }

}

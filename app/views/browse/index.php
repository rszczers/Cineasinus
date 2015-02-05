<?php require '../app/views/header.php' ?>
<div class="container">
<div class="col-md-8">
    <h1>Przeglądaj filmy</h1>
</div>
    
<div class="col-md-4">
        <?php
        $pages = array();
        $no = floor($data['previews']['length'] / $data['perpage']) + 1;
        for ($i = 0; $i < $no; $i++) {
            $pages[] = "http://" . App::ABS_PATH . "browse/index/" . $i;
        }
        ?>               
        <h3 class="text-center">Strona: 
            <?php
            for ($i = 1; $i <= count($pages); $i++) {
                echo "<a href=\"" . $pages[$i - 1] . "\">" . $i . "</a>";
                if($i!=count($pages)) {
                    echo ", ";
                }
            }
            ?>
        </h3>
    </div>          
</div>

    <div class="jumbotron">
        <div class="container">
            <?php
                for($i=0; $i<count($data['previews']['movies']); $i++) {
                    new MoviePreviewView($data['previews']['movies'][$i]);
                }
            ?>                 
        </div>
    </div>

          <div class="container">
              <h2>Lista wszystkich filmów:</h2>
        <?php 
            new MovieListView($data['data']);  
            
        ?>
      
    

<?php require '../app/views/footer.php' ?>
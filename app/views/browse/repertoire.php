<?php require '../app/views/header.php' ?>
<div class="container">
    <h1>Przeglądaj repertuar</h1>
</div>
<div class="jumbotron">
    <div class="container">
        <?php new RepertoireListView($data['rep']); ?>            
    </div>
</div>
<div class="container">
    <?php
    $pages = array();
    $no = floor($data['rep']['length'] / $data['perpage']) + 1;
    for ($i = 0; $i < $no; $i++) {
        $pages[] = "http://" . App::ABS_PATH . "browse/repertoire/" . $i;
    }
    ?>               
    <h4 class="text-center">Strona: 
        <?php
        for ($i = 1; $i <= count($pages); $i++) {
            echo "<a href=\"" . $pages[$i - 1] . "\">" . $i . "</a>";
            if($i!=count($pages)) {
                echo ", ";
            }
        }
        ?>
    </h4>
</div>   

<div class="container">
    <?php require '../app/views/footer.php' ?>
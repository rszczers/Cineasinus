<?php require '../app/views/header.php' ?>


    <div class="jumbotron">
        <div class="container">
            <h1>Przeglądaj filmy</h1>
            <div class="row>"
            <?php new MoviePreviewView($data['data'][0]); ?>
                 <?php new MoviePreviewView($data['data'][1]); ?>
                 <?php new MoviePreviewView($data['data'][2]); ?>
            </div>
        </div>
    </div>
          <div class="container">
        <?php 
            new MovieListView($data['data']);        
        ?>
      
    

<?php require '../app/views/footer.php' ?>
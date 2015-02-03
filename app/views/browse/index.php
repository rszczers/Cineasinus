<?php require '../app/views/header.php' ?>

<div class="container">
    <h1>Przeglądaj filmy</h1>
</div>
    <div class="jumbotron">
        <div class="container">
           
                 <?php new MoviePreviewView($data['data'][0]); ?>
                 <?php new MoviePreviewView($data['data'][1]); ?>
                 <?php new MoviePreviewView($data['data'][2]); ?>
                 <?php new MoviePreviewView($data['data'][3]); ?>
            <?php new MoviePreviewView($data['data'][4]); ?>
            <?php new MoviePreviewView($data['data'][5]); ?>
            
        </div>
    </div>
          <div class="container">
        <?php 
            new MovieListView($data['data']);  
            
        ?>
      
    

<?php require '../app/views/footer.php' ?>
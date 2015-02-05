<?php require '../app/views/header.php' ?>

<div class="jumbotron">
    <div class="container">
        <h1>Lorem ipsum!</h1>        
        <p>Dolor sit amet, consectetur adipiscing elit. In dignissim nibh vel tellus ultrices pharetra. Aenean imperdiet ex non turpis fringilla, nec aliquet dolor pretium. Sed feugiat ipsum ultricies, tristique orci sed, maximus eros. Donec purus nulla, fermentum sit amet velit ac, pretium tempus augue. Duis non ante nibh. Sed et libero in dui auctor molestie id faucibus nisi. Integer lacus dolor, venenatis id cursus ac, mollis commodo libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque non eleifend erat. Phasellus eu interdum dolor. </p>                
    </div>
</div>
<div class="container">    
    <h2>Polecamy</h2> 
        <div class="row">
            <?php new MoviePreviewView($data['data'][0]); ?>
            <?php new MoviePreviewView($data['data'][1]); ?>
            <?php new MoviePreviewView($data['data'][2]); ?>
        </div>
        <div class="row">
            <?php new MoviePreviewView($data['data'][3]); ?>
            <?php new MoviePreviewView($data['data'][4]); ?>
            <?php new MoviePreviewView($data['data'][5]); ?>
        </div> 
    <?php require '../app/views/footer.php' ?>
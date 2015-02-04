<?php require '../app/views/header.php' ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
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
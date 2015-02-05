<?php require '../app/views/header.php' ?>

<div class="jumbotron" id="startup">
    <div class="container">
        <h1>Witaj w Cineasinus!</h1>
        <p>Nam id pretium neque. Donec nec varius augue. Phasellus vulputate eu neque a rhoncus. Pellentesque vel nunc id odio iaculis dapibus. Morbi ac imperdiet tortor. Quisque cursus, lorem sed sagittis dignissim, mauris ipsum posuere massa, eget iaculis arcu ligula vel tortor. Aenean scelerisque accumsan tellus. Donec hendrerit eget ante tristique maximus.</p>
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
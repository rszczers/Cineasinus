<?php require '../app/views/header.php' ?>

<div class="container">
    <h1>Przeglądaj repertuar</h1>
</div>
    <div class="jumbotron">
        <div class="container">
            <?php new RepertoireListView($data);?>
        </div>
    </div>
          <div class="container">
<?php require '../app/views/footer.php' ?>
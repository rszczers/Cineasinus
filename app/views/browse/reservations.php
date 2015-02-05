<?php require '../app/views/header.php' ?>
<div class="jumbotron">
    <div class="container">        
            <?php                                
                new ReservationListView($data['joined']);
            ?>        
    </div>
</div>
<div class="container">
<?php require '../app/views/footer.php' ?>

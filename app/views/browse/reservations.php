<?php require '../app/views/header.php' ?>
<div class="jumbotron">
    <div class="container">
        <pre>
            <?php
                new ReservationListView($data);
            ?>
        </pre>
    </div>
</div>
<div class="container">
<?php require '../app/views/footer.php' ?>

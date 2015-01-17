<?php require '../app/views/header.php' ?>
<div class="container-fluid">
    <section class="container">
        <div class="container-page">				
            <div class="col-md-6">
                <h3 class="dark-grey">Logowanie</h3>

                <div class="form-group row-lg-6">
                    <label>Login</label>
                    <input type="text" name="login" class="form-control" id="" value="">
                </div>

                <div class="form-group row-lg-6">
                    <label>Hasło</label>
                    <input type="password" name="password" class="form-control" id="" value="">
                </div>
                <button type="submit" class="btn btn-primary">Zaloguj</button>
            </div>
        </div>
    </section>
</div>
<?php require '../app/views/footer.php' ?>

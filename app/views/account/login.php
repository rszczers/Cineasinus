<?php require '../app/views/header.php' ?>
<div class="jumbotron">
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">				
                <div class="col-md-6">
                    <h3 class="dark-grey">Logowanie</h3>

                    <form action="" autocomplete="on" method="POST">
                        <div class="form-group row-lg-6">
                            <label>Login</label>
                            <input type="text" name="email" class="form-control" id="" value="">
                        </div>

                        <div class="form-group row-lg-6">
                            <label>Hasło</label>
                            <input type="password" name="pass" class="form-control" id="" value="">
                        </div>
                            <input type="hidden" name="tried" value="1">
                            <button type="submit" class="btn btn-primary">Zaloguj</button>
                    </form>                
                </div>
                <div class="col-md-6">
                    <h3>Nie masz konta? <a href="http://<?php echo App::ABS_PATH ?>account/register">Zarejestruj się!</a></h3>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container">
<?php require '../app/views/footer.php' ?>

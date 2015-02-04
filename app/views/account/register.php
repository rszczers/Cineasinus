<?php require '../app/views/header.php' ?>
<div class="jumbotron">
    <div class ="container">
        <div class="col-md-6">        
        </div>
            <div class="col-md-6">
                <h3 class="dark-grey">Rejestracja</h3>
                <form method="POST" action="<?php echo "http://" . App::ABS_PATH . "account/register" ?>">
                    <div class="form-group col-lg-12">
                        <label>Imię</label>
                        <input type="" name="first" class="form-control" id="" value="">
                        <label>Nazwisko</label>
                        <input type="" name="last" class="form-control" id="" value="">
                    </div>     

                    <div class="form-group col-lg-12">
                        <label>Adres e-mail</label>
                        <input type="" name="email" class="form-control" id="" value="">
                    </div>              

                    <div class="form-group col-lg-6">
                        <label>Hasło</label>
                        <input type="password" name="pass" class="form-control" id="" value="">
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Powtórz hasło</label>
                        <input type="password" name="passcheck" class="form-control" id="" value="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Telefon kontaktowy</label>
                        <input type="" name="phone" class="form-control" id="" value="">
                    </div>
                <input type="hidden" name="tried" value="1">
                <button type="submit" class="btn btn-primary">Rejestruj</button>
                </form>
            </div>
    </div>
</div>
<div class="container">
<?php require '../app/views/footer.php' ?>
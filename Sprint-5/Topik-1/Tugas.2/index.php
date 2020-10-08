
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm mt-5">
                <form method="post">
                    <div class="form-group">
                        <div class="alert alert-primary" role="alert">
                            PERSEGI
                        </div>
                        <label for="panjang">Panjang</label>
                        <input type="text" class="form-control " id="" name="panjang" placeholder="Panjang...">
                    </div>
                    <div class="form-group">
                        <label for="lebar">lebar</label>
                        <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar...">
                    </div>
                    <button type="submit" class="btn btn-primary" name="persegi">HITUNG</button>
                </form>
            </div>
            <div class="col-sm mt-5">
                <form method="post">
                    <div class="form-group">
                        <div class="alert alert-primary" role="alert">
                            SEGITIGA
                        </div>
                        <label for="alas">Alas</label>
                        <input type="text" class="form-control" id="" name="alas" placeholder="alas">
                    </div>
                    <div class="form-group">
                        <label for="tinggi">Tinggi</label>
                        <input type="text" class="form-control" id="" name="tinggi" placeholder="tinggi">
                    </div>
                    <button type="submit" class="btn btn-primary" name="segitiga">HITUNG</button>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
<?php
use Src\Persegi;
use Src\Segitiga;
require_once __DIR__. '/vendor/autoload.php';
if (isset($_POST["persegi"])) {
    $persegi =  new Persegi($_POST["panjang"], $_POST["lebar"]);
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luasPersegi = $persegi->luas();
    $kelilingPersegi = $persegi->keliling();
?>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3 mt-5 text-center" style="max-width: 18rem;">
                <div class="card-header">Hasil</div>
                <div class="card-body">
                    <h5 class="card-title"><?= "Luas Persegi =" ."&nbsp". $luasPersegi . "cm"; ?></h5>
                    <h5 class="card-title"><?= "Keliling Persegi =" ."&nbsp". $kelilingPersegi . "cm"; ?></h5>
                    <p class="card-text">SUCCESS.</p>
                </div>

            </div>
        </div>
    <?php
}
if (isset($_POST["segitiga"])) {
    $segitiga = new Segitiga($_POST["alas"], $_POST["tinggi"]);
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $luasSegitiga = $segitiga->luas();?>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card text-white bg-primary mb-3 mt-5 text-center" style="max-width: 18rem;">
                <div class="card-header">Hasil</div>
                <div class="card-body">
                    <h5 class="card-title"><?= "Luas ="."&nbsp". $luasSegitiga . "cm"; ?></h5>
                    <p class="card-text">SUCCESS.</p>
                </div>

            </div>
        </div>
    <?php
}

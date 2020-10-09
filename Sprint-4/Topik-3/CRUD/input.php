<?php
include("controller.php");
$objek = new konek();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">Menu Input Data</h1>
    <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="nama">
                    <label for="divisi">divisi</label>
                    <input type="text" name="divisi" id="divisi" placeholder="divisi">
                    <label for="asal">asal</label>
                    <input type="text" name="asal" id="asal" placeholder="asal">
                    <input class="btn btn-dark" type="submit" name="input" value="input">
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["input"])) {
        $nama = $_POST["nama"];
        $divisi = $_POST["divisi"];
        $asal = $_POST["asal"];
        $objek->create($nama, $divisi, $asal);
        header('Location: index.php');
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
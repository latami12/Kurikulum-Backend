<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<h1 align="center">Menu Update Barang</h1>
<?php 
include("crud.php");
$data = new DataBarang();
foreach ($data->barang_id($_GET["id"]) as $up) :
?>
    <form action="cek.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <div class="col-md-6">
            <div class="form-group">
                <label for="barang">NAMA BARANG</label>
                <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang" value="<?= $up["barang"]?>">
                <small id="barang" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="harga">HARGA BARANG</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang"value="<?= $up["harga"]?>">
                <small id="harga" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="asal">ASAL BARANG</label>
                <input type="text" class="form-control" id="asal" name="asal" placeholder="Asal Barang"value="<?= $up["asal"]?>">
                <small id="asal" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="tujuan">TUJUAN BARANG</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan Barang"value="<?= $up["tujuan"]?>">
                <small id="tujuan" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="kurir">KURIR BARANG</label>
                <input type="text" class="form-control" id="kurir" name="kurir" placeholder="Kurir Barang"value="<?= $up["kurir"]?>">
                <small id="kurir" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="pengirim">PENGIRIM BARANG</label>
                <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim Barang"value="<?= $up["pengirim"]?>">
                <small id="pengirim" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <button type="submit"class="badge badge-primary btn btn-block btn-md" name="edit">EDIT</button>
        </div>
  </form>
<?php endforeach; ?>  
</body>
</html>
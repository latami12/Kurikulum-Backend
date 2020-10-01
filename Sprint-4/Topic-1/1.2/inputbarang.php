<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1 align="center">Menu Input Barang</h1>
    <form action="cek.php" method="POST">
        <div class="col-md-6">
            <div class="form-group">
                <label for="barang">NAMA BARANG</label>
                <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
                <small id="barang" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="harga">HARGA BARANG</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang">
                <small id="harga" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="asal">ASAL BARANG</label>
                <input type="text" class="form-control" id="asal" name="asal" placeholder="Asal Barang">
                <small id="asal" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="tujuan">TUJUAN BARANG</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan Barang">
                <small id="tujuan" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="kurir">KURIR BARANG</label>
                <input type="text" class="form-control" id="kurir" name="kurir" placeholder="Kurir Barang">
                <small id="kurir" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <div class="form-group">
                <label for="pengirim">PENGIRIM BARANG</label>
                <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim Barang">
                <small id="pengirim" class="form-text text-muted">Isi lah dengan sesuai.</small>
            </div>
            <button type="submit"class="badge badge-primary btn btn-block btn-md" name="submit">INPUT</button>
        </div>
  </form>
    
</body>
</html>
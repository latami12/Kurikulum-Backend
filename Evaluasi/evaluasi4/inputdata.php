<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA INPUT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1 align="center">Menu Input Data Santri</h1>
    <div class="col-md-6">
        <form method="post" action="">
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" id="nama" name="umur" placeholder="Nama Santri">
                <small id="emailHelp" class="form-text text-muted">ISI DENGAN BENAR.</small>
            </div>
            <div class="form-group">
                <label for="umur">UMUR</label>
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur">
                <small id="emailHelp" class="form-text text-muted">ISI DENGAN BENAR.</small>
            </div>
            <div class="form-group">
                <label for="asal">ASAL</label>
                <input type="text" class="form-control" id="asal" name="divisi" placeholder="Asal">
                <small id="emailHelp" class="form-text text-muted">ISI DENGAN BENAR.</small>
            </div>
            <div class="form-group">
                <label for="divisi">DIVISI</label>
                <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi">
                <small id="emailHelp" class="form-text text-muted">ISI DENGAN BENAR.</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
    <?php
    if (isset($_POST["submit"])) {
        header("Location:konek.php");
    }
    ?>
</body>
</html>
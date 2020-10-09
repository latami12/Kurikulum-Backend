<?php
include("controller.php");
$objek = new konek();
if (isset($_POST["edit"])) {
    $nama = $_POST["nama"];
    $divisi = $_POST["divisi"];
    $asal = $_POST["asal"];
    $id = $_GET["id"];
    $objek->update($nama, $divisi, $asal, $id);
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <?php foreach ($objek->show_id($_GET["id"]) as $key => $value) {
    ?>
    <form action="" method="post">
        <input type="text" name="nama" id="nama" placeholder="nama" value="<?= $value["nama"]?>">
        <input type="text" name="divisi" id="divisi" placeholder="divisi" value="<?= $value["divisi"]?>">
        <input type="text" name="asal" id="asal" placeholder="asal" value="<?= $value["asal"]?>">
        <input class="btn btn-dark" type="submit" name="edit" value="Edit">  
    </form>
    <?php } ?>
</body>
</html>
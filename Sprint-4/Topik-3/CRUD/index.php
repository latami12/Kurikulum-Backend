<?php
include("controller.php");
$objek = new konek();
session_start();
if(!isset($_SESSION["email"])){
    header("Location:Login.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $objek->delete($id);
}
if (isset($_GET["aksi"]) == "logout") {
    $objek->logout();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILAN DATA</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>DIVISI</th>
                <th>ASAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <?php
        foreach($objek->show() as $key => $value){
        ?>
        <tbody>
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value["nama"] ?></td>
                <td><?= $value["divisi"] ?></td>
                <td><?= $value["asal"] ?></td>
                <td>
                    <a href="update.php?id=<?=$value["id"]?>">edit</a>
                    <a href="index.php?id=<?=$value["id"] ?>">hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <a href="input.php" ><button>Tambah</button></a>
    <a href="index.php?aksi=logout">logout</a>
</body>
</html>
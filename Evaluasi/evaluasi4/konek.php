<?php
include("fungsi.php");
$data = new konek();
if (isset($_post["submit"])) {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $asal = $_POST["asal"];
    $divisi = $_POST["divisi"];
    header("Location:input.php");
}
if (isset($_POST["edit"])) {
    $barang = $_POST["nama"];
    $harga = $_POST["umur"];
    $asal = $_POST["asal"];
    $tujuan = $_POST["divisi"];
    
    $id = $_POST["id"];
    $barang = $data->update_data($nama, $umur, $asal, $divisi, $id);
    header ('Location: input.php');
}
if (isset($_GET["hapus"])== "nama") {
    $data->delete_data($_GET["id"]);
    header ('Location: input.php');
}
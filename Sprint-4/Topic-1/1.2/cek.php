<?php
        include("crud.php");
        $data = new DataBarang();
        if (isset($_POST["submit"])) {
            $barang = $_POST["barang"];
            $harga = $_POST["harga"];
            $asal = $_POST["asal"]; 
            $tujuan = $_POST["tujuan"];
            $kurir = $_POST["kurir"];
            $pengirim = $_POST["pengirim"];
            
            $barang = $data->input_barang($barang, $harga, $asal, $tujuan, $kurir, $pengirim);
            header ('Location: input.php');
        }
        if (isset($_POST["edit"])) {
            $barang = $_POST["barang"];
            $harga = $_POST["harga"];
            $asal = $_POST["asal"];
            $tujuan = $_POST["tujuan"];
            $kurir = $_POST["kurir"];
            $pengirim = $_POST["pengirim"];
            
            $id = $_POST["id"];
            $barang = $data->update_barang($barang, $harga, $asal, $tujuan, $kurir, $pengirim, $id);
            header ('Location: input.php');
        }
        if (isset($_GET["hapus"])== "barang") {
            $data->delete_barang($_GET["id"]);
            header ('Location: input.php');
        }
    ?>
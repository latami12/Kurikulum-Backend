<?php
Class DataBarang {
    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=crud", "latami", "untection14");
    }
    public function barang()
    {
        $barang = "SELECT * FROM data";
        $data = $this->database->prepare($barang);
        $data->execute();
        return $data;
        
    }
    public function input_barang($barang, $harga, $kurir, $pengirim, $asal, $tujuan)
    {
        $input = "INSERT INTO data (barang, harga, asal, tujuan, kurir, pengirim) VALUE(?, ?, ?, ?, ?, ?)";
        $data = $this->database->prepare($input);
        return $data->execute([$barang, $harga, $asal, $tujuan, $kurir, $pengirim]);
    }
    public function barang_id($id)
    {
        $barang = "SELECT * FROM data WHERE id = $id";
        $data = $this->database->prepare($barang);
        $data->execute();
        return $data;
        
    }
    public function update_barang($barang, $harga, $asal, $tujuan, $kurir, $pengirim, $id)
    {
        $data = $this->database->prepare("UPDATE data SET barang = ?, harga = ?, asal = ?, tujuan = ?, kurir = ?, pengirim = ? WHERE id=$id");
        $data->execute([$barang, $harga, $asal, $tujuan, $kurir, $pengirim]);
        return $data;
    }
    public function delete_barang($id)
    {
        $delete = "DELETE FROM data WHERE id=?";
        $data = $this->database->prepare($delete);
        $data->execute([$id]);
        return $data;
    }
}
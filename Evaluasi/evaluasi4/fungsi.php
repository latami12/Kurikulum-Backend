<?php
class konek
{
    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=evaluasi4", "latami", 'untection14');
    }
    public function santri()
    {
        $query = "SELECT * FROM santri";
        $cek = $this->conn->query($query);
        $cek->execute();
        return $cek;
    }
    public function santri_id($id)
    {
        $query = "SELECT * FROM santri WHERE id=$id";
        $cek = $this->conn->query($query);
        $cek->execute();
        return $cek;
    }
    public function input_data( $nama, $umur, $asal, $divisi)
    {
        $query = "INSERT INTO santri (nama, umur, asal, divisi) VALUES ($nama, $umur, $asal, $divisi)";
        $cek = $this->conn->query($query);
        $cek->execute();
        return $cek;
    }
    public function delete_data($id)
    {
        $query = "DELETE FROM santri WHERE id=?";
        $cek = $this->conn->query($query);
        $cek->execute([$id]);
        return $cek;
    }
    public function update_data($nama, $umur, $asal, $divisi, $id)
    {
        $data = $this->database->prepare("UPDATE data SET nama = ?, umur = ?, asal = ?, divisi = ?, WHERE id=$id");
        $data->execute([$nama, $umur, $asal, $divisi]);
        return $data;
    }
}
?>
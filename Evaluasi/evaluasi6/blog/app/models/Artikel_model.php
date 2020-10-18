<?php

class Artikel_model
{
    private $table = 'artikel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArtikel()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getArtikelById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); //tidak langsung pake $id untuk menghindari sql injection dan untuk membanding dan mengamanin query kita
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataArtikel($data)
    {
        $query = "INSERT INTO artikel (judul, artikel, kategori, img) VALUES (:judul, :artikel, :kategori, :img)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('artikel', $data['artikel']);
        $this->db->bind('kategori', $data['kategori']);
        if (!$_FILES['img']['error'] == 4) {
            $this->db->bind('img', $_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], '../public/img/' . $_FILES['img']['name']);
        } else {
            $this->db->bind('img', NULL);
        }
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataArtikel($id)
    {
        $query = "DELETE FROM artikel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataArtikel($data)
    {
        $query = "UPDATE artikel SET judul = :judul, artikel = :artikel, kategori = :kategori, img = :img WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('artikel', $data['artikel']);
        $this->db->bind('kategori', $data['kategori']);
        if (!$_FILES['img']['error'] == 4) {
            $this->db->bind('img', $_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], '../public/img/' . $_FILES['img']['name']);
        } else {
            $this->db->bind('img', $data['imghide']);
        }
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataArtikel()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM artikel WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getCat()
    {
        $this->db->query("SELECT DISTINCT kategori FROM " . $this->table);
        return $this->db->resultSet();
    }
}

<?php

class Artikel extends Controller{
    public function __construct()
    {
        if (!isset($_SESSION["email"])) {
            header("Location: " . BASEURL . "/home");
        }
    }
    public function index()
    {
        $data['art'] = $this->model('Artikel_model')->getAllArtikel();
        $data['cat'] = $this->model('Artikel_model')->getCat();
        $data['judul'] = 'Artikel';
        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['artikel'] = 'Detail Artikel';
        $data['art'] = $this->model('Artikel_model')->getArtikelById($id);
        $this->view('templates/header', $data);
        $this->view('artikel/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Artikel_model')->tambahDataArtikel($_POST) > 0) {
            Flasher::setFlash(' berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            Flasher::setFlash(' gagal', 'ditambahkan', 'dark');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Artikel_model')->hapusDataArtikel($id) > 0) {
            Flasher::setFlash(' berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            Flasher::setFlash(' gagal', 'dihapus', 'dark');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }
    public function getubah(){
        echo json_encode( $this->model('Artikel_model')->getArtikelById($_POST['id']));
    }
    public function ubah(){
        if ($this->model('Artikel_model')->ubahDataArtikel($_POST) > 0) {
            Flasher::setFlash(' berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            Flasher::setFlash(' gagal', 'diubah', 'dark');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }
    public function cari(){
        $data['judul'] = 'Daftar Artikel';
        $data['art'] = $this->model('Artikel_model')->cariDataArtikel();
        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }
    public function logout()
    {
        $this->view('about/logout');
    }
}
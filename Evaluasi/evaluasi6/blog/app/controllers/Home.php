<?php

class home extends Controller{
    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['art'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
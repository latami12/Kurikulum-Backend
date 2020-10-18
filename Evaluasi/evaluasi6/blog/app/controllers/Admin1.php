<?php

class Admin1 extends Controller
{

    public function index()
    {
        $data['art'] = $this->model('Admin_model')->getAllArtikel();
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        
        if ($this->model('Admin_model')->loginUser($_POST) > 0) {
            Flasher::setLogin(' berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/artikel');
            exit;
        } else {
            Flasher::setLogin(' gagal', 'ditambahkan', 'dark');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function signup()
    {
        if ($this->model('Admin_model')->signupUser($_POST) > 0) {
            Flasher::setSigup(' berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setSigup(' gagal', 'ditambahkan', 'dark');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }
}

<?php

class About extends Controller{
    public function __construct()
    {
        if (!isset($_SESSION["email"])) {
            header("Location: " . BASEURL . "/home");
        }
    }
    public function index($nama = 'Rahmat Bagus Latami', $pekerjaan = 'Penuntut Ilmu', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
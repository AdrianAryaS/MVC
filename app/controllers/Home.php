<?php

class Home extends Controller{
    // public function index($nama = 'Jojo', $pekerjaan = 'Pelajar')
    // {
    //     echo "Halo, nama saya $nama dan saya merupakan seorang $pekerjaan";
    // }
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'utha.jpg';
        $data['nama'] = 'Utha';
        $data['pekerjaan'] = 'Raja Iblis';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}
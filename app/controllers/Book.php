<?php

class Book extends Controller {
    public function index($pengguna = 'Anda')
    {
        $data['judul'] = 'Daftar Grimore';
        $data['buku'] = $this->model('Book_model')->getBook();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }
}
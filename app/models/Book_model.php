<?php

class Book_model {
    private $books = [
        [
            "judul" => "Kelahiran",
            "penulis" => "Aku",
            "tanggal_selesai" => "Masa lalu",
        ],
        [
            "judul" => "Kehidupan",
            "penulis" => "Kamu",
            "tanggal_selesai" => "Masa kini",
        ],
        [
            "judul" => "Kematian",
            "penulis" => "Dia",
            "tanggal_selesai" => "Masa Depan",
        ],
    ];

    public function getBook()
    {
        return $this->books;
    }
}
<?php
require_once 'Bioskop.php';

class Cinema extends Bioskop {
    private $judulFilm;
    private $genre;
    private $durasi;
    private $sutradara;
    private $rumahProduksi;
    private $tahunRilis;

    public function __construct($id, $namaBioskop, $lokasi, $jumlahStudio,
                                $judulFilm, $genre, $durasi,
                                $sutradara, $rumahProduksi, $tahunRilis) {
        parent::__construct($id, $namaBioskop, $lokasi, $jumlahStudio);
        $this->judulFilm = $judulFilm;
        $this->genre = $genre;
        $this->durasi = $durasi;
        $this->sutradara = $sutradara;
        $this->rumahProduksi = $rumahProduksi;
        $this->tahunRilis = $tahunRilis;
    }

    public function getJudulFilm() { return $this->judulFilm; }
    public function setJudulFilm($judulFilm) { $this->judulFilm = $judulFilm; }
    public function getGenre() { return $this->genre; }
    public function setGenre($genre) { $this->genre = $genre; }
    public function getDurasi() { return $this->durasi; }
    public function setDurasi($durasi) { $this->durasi = $durasi; }
    public function getSutradara() { return $this->sutradara; }
    public function setSutradara($sutradara) { $this->sutradara = $sutradara; }
    public function getRumahProduksi() { return $this->rumahProduksi; }
    public function setRumahProduksi($rumahProduksi) { $this->rumahProduksi = $rumahProduksi; }
    public function getTahunRilis() { return $this->tahunRilis; }
    public function setTahunRilis($tahunRilis) { $this->tahunRilis = $tahunRilis; }
}
?>

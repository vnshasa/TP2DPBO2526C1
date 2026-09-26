<?php
require_once 'Cinema.php';

class Premiere extends Cinema {
    private $studio;
    private $jamTayang;
    private $hargaTiket;
    private $foto_produk;

    public function __construct($id, $namaBioskop, $lokasi, $jumlahStudio,
                                $judulFilm, $genre, $durasi,
                                $sutradara, $rumahProduksi, $tahunRilis,
                                $studio, $jamTayang, $hargaTiket, $fotoProduk) {
        parent::__construct($id, $namaBioskop, $lokasi, $jumlahStudio,
                            $judulFilm, $genre, $durasi, $sutradara, $rumahProduksi, $tahunRilis);
        $this->studio = $studio;
        $this->jamTayang = $jamTayang;
        $this->hargaTiket = $hargaTiket;
        $this->foto_produk = $fotoProduk;
    }

    public function getStudio() { return $this->studio; }
    public function setStudio($studio) { $this->studio = $studio; }
    public function getJamTayang() { return $this->jamTayang; }
    public function setJamTayang($jamTayang) { $this->jamTayang = $jamTayang; }
    public function getHargaTiket() { return $this->hargaTiket; }
    public function setHargaTiket($hargaTiket) { $this->hargaTiket = $hargaTiket; }
    public function getFotoProduk() { return $this->foto_produk; }
    public function setFotoProduk($fotoProduk) { $this->foto_produk = $fotoProduk; }

    public function data() {
        return [
            $this->getId(),
            $this->getNamaBioskop(),
            $this->getLokasi(),
            $this->getJumlahStudio(),
            $this->getJudulFilm(),
            $this->getGenre(),
            $this->getDurasi(),
            $this->getSutradara(),
            $this->getRumahProduksi(),
            $this->getTahunRilis(),
            $this->getStudio(),
            $this->getJamTayang(),
            $this->getHargaTiket(),
            $this->getFotoProduk()
        ];
    }
}
?>

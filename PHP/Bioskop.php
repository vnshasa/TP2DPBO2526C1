<?php
class Bioskop {
    private $id;
    private $namaBioskop;
    private $lokasi;
    private $jumlahStudio;

    public function __construct($id, $namaBioskop, $lokasi, $jumlahStudio) {
        $this->id = $id;
        $this->namaBioskop = $namaBioskop;
        $this->lokasi = $lokasi;
        $this->jumlahStudio = $jumlahStudio;
    }

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getNamaBioskop() { return $this->namaBioskop; }
    public function setNamaBioskop($namaBioskop) { $this->namaBioskop = $namaBioskop; }
    public function getLokasi() { return $this->lokasi; }
    public function setLokasi($lokasi) { $this->lokasi = $lokasi; }
    public function getJumlahStudio() { return $this->jumlahStudio; }
    public function setJumlahStudio($jumlahStudio) { $this->jumlahStudio = $jumlahStudio; }
}
?>

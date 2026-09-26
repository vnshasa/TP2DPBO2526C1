#include "Bioskop.h"

class Cinema : public Bioskop {
private:
    string judulFilm;
    string genre;
    string durasi;
    string sutradara;
    string rumahProduksi;
    int tahunRilis;

public:
    Cinema(int id, string namaBioskop, string lokasi, int jumlahStudio,
        string judulFilm, string genre, string durasi,
        string sutradara, string rumahProduksi, int tahunRilis)
        : Bioskop(id, namaBioskop, lokasi, jumlahStudio) {
        this->judulFilm = judulFilm;
        this->genre = genre;
        this->durasi = durasi;
        this->sutradara = sutradara;
        this->rumahProduksi = rumahProduksi;
        this->tahunRilis = tahunRilis;
    }

    string getJudulFilm() { return judulFilm; }
    void setJudulFilm(string judulFilm) { this->judulFilm = judulFilm; }

    string getGenre() { return genre; }
    void setGenre(string genre) { this->genre = genre; }

    string getDurasi() { return durasi; }
    void setDurasi(string durasi) { this->durasi = durasi; }

    string getSutradara() { return sutradara; }
    void setSutradara(string sutradara) { this->sutradara = sutradara; }

    string getRumahProduksi() { return rumahProduksi; }
    void setRumahProduksi(string rumahProduksi) { this->rumahProduksi = rumahProduksi; }

    int getTahunRilis() { return tahunRilis; }
    void setTahunRilis(int tahunRilis) { this->tahunRilis = tahunRilis; }
};

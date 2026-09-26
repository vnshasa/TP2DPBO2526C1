#include "Cinema.h"
#include <vector>

class Premiere : public Cinema {
private:
    string studio;
    string jamTayang;
    int hargaTiket;

public:
    Premiere(int id, string namaBioskop, string lokasi, int jumlahStudio,
            string judulFilm, string genre, string durasi,
            string sutradara, string rumahProduksi, int tahunRilis,
            string studio, string jamTayang, int hargaTiket)
        : Cinema(id, namaBioskop, lokasi, jumlahStudio,
                judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis) {
        this->studio = studio;
        this->jamTayang = jamTayang;
        this->hargaTiket = hargaTiket;
    }

    string getStudio() { return studio; }
    void setStudio(string studio) { this->studio = studio; }

    string getJamTayang() { return jamTayang; }
    void setJamTayang(string jamTayang) { this->jamTayang = jamTayang; }

    int getHargaTiket() { return hargaTiket; }
    void setHargaTiket(int hargaTiket) { this->hargaTiket = hargaTiket; }

    vector<string> data() {
        vector<string> hasil;
        hasil.push_back(to_string(getId()));
        hasil.push_back(getNamaBioskop());
        hasil.push_back(getLokasi());
        hasil.push_back(to_string(getJumlahStudio()));
        hasil.push_back(getJudulFilm());
        hasil.push_back(getGenre());
        hasil.push_back(getDurasi());
        hasil.push_back(getSutradara());
        hasil.push_back(getRumahProduksi());
        hasil.push_back(to_string(getTahunRilis()));
        hasil.push_back(getStudio());
        hasil.push_back(getJamTayang());
        hasil.push_back(to_string(getHargaTiket()));
        return hasil;
    }
};

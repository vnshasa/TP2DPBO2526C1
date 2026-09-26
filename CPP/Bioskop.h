#include <string>

using namespace std;

class Bioskop {
private:
    int id;
    string namaBioskop;
    string lokasi;
    int jumlahStudio;

public:
    Bioskop(int id, string namaBioskop, string lokasi, int jumlahStudio) {
        this->id = id;
        this->namaBioskop = namaBioskop;
        this->lokasi = lokasi;
        this->jumlahStudio = jumlahStudio;
    }

    int getId() { return id; }
    void setId(int id) { this->id = id; }

    string getNamaBioskop() { return namaBioskop; }
    void setNamaBioskop(string namaBioskop) { this->namaBioskop = namaBioskop; }

    string getLokasi() { return lokasi; }
    void setLokasi(string lokasi) { this->lokasi = lokasi; }

    int getJumlahStudio() { return jumlahStudio; }
    void setJumlahStudio(int jumlahStudio) { this->jumlahStudio = jumlahStudio; }
};

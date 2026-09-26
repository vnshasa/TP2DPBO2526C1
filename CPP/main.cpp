#include <iostream>
#include <vector>
#include <string>
#include <iomanip>
#include "Premiere.h"

using namespace std;

bool idSudahAda(vector<Premiere>& daftar, int id) {
    for (int i = 0; i < (int)daftar.size(); i++) {
        if (daftar[i].getId() == id) {
            return true;
        }
    }
    return false;
}

vector<string> headerTabel() {
    vector<string> header;
    header.push_back("ID");
    header.push_back("BIOSKOP (nama / lokasi / jml studio)");
    header.push_back("FILM (judul / genre / durasi)");
    header.push_back("PRODUKSI (sutradara / rumah / tahun)");
    header.push_back("PREMIERE (studio / jam / harga)");
    return header;
}

vector<vector<string>> siapkanData(vector<Premiere>& daftar) {
    vector<vector<string>> semuaData;

    for (int i = 0; i < (int)daftar.size(); i++) {
        vector<string> row;
        row.push_back(to_string(daftar[i].getId()));

        row.push_back(
            daftar[i].getNamaBioskop() + " / " +
            daftar[i].getLokasi() + " / " +
            to_string(daftar[i].getJumlahStudio()) + " studio"
        );

        row.push_back(
            daftar[i].getJudulFilm() + " / " +
            daftar[i].getGenre() + " / " +
            daftar[i].getDurasi()
        );

        row.push_back(
            daftar[i].getSutradara() + " / " +
            daftar[i].getRumahProduksi() + " / " +
            to_string(daftar[i].getTahunRilis())
        );

        row.push_back(
            daftar[i].getStudio() + " / " +
            daftar[i].getJamTayang() + " / Rp" +
            to_string(daftar[i].getHargaTiket())
        );

        semuaData.push_back(row);
    }

    return semuaData;
}

vector<string> bungkusTeks(string teks, int lebar) {
    vector<string> hasil;
    while ((int)teks.length() > lebar) {
        int posisi = lebar;
        while (posisi > 0 && teks[posisi] != ' ') {
            posisi--;
        }
        if (posisi == 0) posisi = lebar;
        hasil.push_back(teks.substr(0, posisi));
        teks = teks.substr(posisi);
        while (!teks.empty() && teks[0] == ' ') teks.erase(0, 1);
    }
    hasil.push_back(teks);
    return hasil;
}

void tampilkanGaris(vector<int>& lebar) {
    cout << "+";
    for (int i = 0; i < (int)lebar.size(); i++) {
        cout << string(lebar[i] + 2, '-') << "+";
    }
    cout << endl;
}

void tampilkanBarisBungkus(vector<string>& row, vector<int>& lebar) {
    vector<vector<string>> baris;
    int jumlahBaris = 1;

    for (int i = 0; i < (int)row.size(); i++) {
        baris.push_back(bungkusTeks(row[i], lebar[i]));
        if ((int)baris[i].size() > jumlahBaris) jumlahBaris = baris[i].size();
    }

    for (int barisKe = 0; barisKe < jumlahBaris; barisKe++) {
        cout << "|";
        for (int i = 0; i < (int)row.size(); i++) {
            string isi = "";
            if (barisKe < (int)baris[i].size()) isi = baris[i][barisKe];
            cout << " " << left << setw(lebar[i]) << isi << " |";
        }
        cout << endl;
    }
}

void tampilkanData(vector<Premiere>& daftar) {
    vector<string> header = headerTabel();
    vector<vector<string>> semuaData = siapkanData(daftar);

    vector<int> lebar;
    lebar.push_back(4);
    lebar.push_back(30);
    lebar.push_back(43);
    lebar.push_back(46);
    lebar.push_back(29);

    cout << "\n+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+" << endl;
    cout << "                                                                                 DATA BIOSKOP                                   " << endl;
    cout << "+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+" << endl;
    cout << "Semua atribut dari Bioskop, Cinema, dan Premiere ditampilkan.\n";

    // Header juga dibuat singkat dan terbagi berdasarkan class agar tabel mudah dibaca.
    vector<string> headerSingkat;
    headerSingkat.push_back("ID");
    headerSingkat.push_back("BIOSKOP");
    headerSingkat.push_back("FILM");
    headerSingkat.push_back("PRODUKSI");
    headerSingkat.push_back("PREMIERE");

    tampilkanGaris(lebar);
    tampilkanBarisBungkus(headerSingkat, lebar);
    tampilkanGaris(lebar);

    for (int i = 0; i < (int)semuaData.size(); i++) {
        tampilkanBarisBungkus(semuaData[i], lebar);
        if (i < (int)semuaData.size() - 1) {
            tampilkanGaris(lebar);
        }
    }

    tampilkanGaris(lebar);
    cout << "Keterangan:" << endl;
    cout << "BIOSKOP = nama/lokasi/jumlah studio" << endl;
    cout << "FILM = judul/genre/durasi" << endl;
    cout << "PRODUKSI = sutradara/rumah produksi/tahun" << endl;
    cout << "PREMIERE = studio/jam/harga" << endl;
    cout << "Jumlah data: " << daftar.size() << endl;
}

void tambahData(vector<Premiere>& daftar) {
    int id, jumlahStudio, tahunRilis, hargaTiket;
    string namaBioskop, lokasi, judulFilm, genre, durasi;
    string sutradara, rumahProduksi, studio, jamTayang;

    cout << "\n+---------------------------+" << endl;
    cout << "         TAMBAH DATA          " << endl;
    cout << "+---------------------------+" << endl;

    cout << "ID              : ";
    cin >> id;
    cin.ignore();
    if (idSudahAda(daftar, id)) {
        cout << "ID sudah digunakan." << endl;
        return;
    }

    cout << "Nama Bioskop    : "; getline(cin, namaBioskop);
    cout << "Lokasi          : "; getline(cin, lokasi);
    cout << "Jumlah Studio   : "; cin >> jumlahStudio; cin.ignore();
    cout << "Judul Film      : "; getline(cin, judulFilm);
    cout << "Genre           : "; getline(cin, genre);
    cout << "Durasi          : "; getline(cin, durasi);
    cout << "Sutradara       : "; getline(cin, sutradara);
    cout << "Rumah Produksi  : "; getline(cin, rumahProduksi);
    cout << "Tahun Rilis     : "; cin >> tahunRilis; cin.ignore();
    cout << "Studio          : "; getline(cin, studio);
    cout << "Jam Tayang      : "; getline(cin, jamTayang);
    cout << "Harga Tiket     : "; cin >> hargaTiket; cin.ignore();

    daftar.push_back(Premiere(
        id, namaBioskop, lokasi, jumlahStudio,
        judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis,
        studio, jamTayang, hargaTiket
    ));

    cout << "\nData berhasil ditambahkan.\n";
}

int main() {
    vector<Premiere> daftar;

    // 5 objek awal sebelum input user
    daftar.push_back(Premiere(
        1, "VSA Cinema", "Bandung", 6,
        "Elemental", "Animasi, Petualangan, Komedi, Fantasi, Romantis", "101 menit",
        "Peter Sohn", "Walt Disney Pictures, Pixar Animation Studios", 2023,
        "Premiere 1", "19:00", 65000
    ));

    daftar.push_back(Premiere(
        2, "VSA Cinema", "Bandung", 6,
        "Hoppers", "Animasi, Petualangan, Komedi, Sci-Fi", "105 menit",
        "Daniel Chong", "Walt Disney Pictures, Pixar Animation Studios", 2026,
        "Premiere 1", "16:30", 65000
    ));

    daftar.push_back(Premiere(
        3, "VSA Cinema", "Bandung", 6,
        "Zootopia 2", "Animasi, Petualangan, Komedi, Kejahatan", "108 menit",
        "Jared Bush, Byron Howard", "Walt Disney Pictures, Walt Disney Animation Studios", 2025,
        "Premiere 2", "20:30", 70000
    ));

    daftar.push_back(Premiere(
        4, "VSA Cinema", "Bandung", 6,
        "Moana 2", "Animasi, Petualangan, Musikal, Fantasi", "100 menit",
        "David G. Derrick Jr., Jason Hand, Dana Ledoux Miller", "Walt Disney Pictures, Walt Disney Animation Studios", 2024,
        "Premiere 2", "18:30", 70000
    ));

    daftar.push_back(Premiere(
        5, "VSA Cinema", "Bandung", 6,
        "Inside Out 2", "Animasi, Komedi, Drama, Keluarga, Fantasi", "96 menit",
        "Kelsey Mann", "Walt Disney Pictures, Pixar Animation Studios", 2024,
        "Premiere 3", "22:30", 70000
    ));

    cout << "--------------------------------------------------" << endl;
    cout << "                   VSA CINEMA                     " << endl;
    cout << "              DATA & PENAYANGAN FILM              " << endl;
    cout << "--------------------------------------------------" << endl;
    cout << endl;

    int pilihan;
    do {
        cout << "\n\n[1] Tambah Data" << endl;
        cout << "[2] Tampilkan Data" << endl;
        cout << "[0] Keluar" << endl;
        cout << endl;

        cout << "Pilih menu: ";
        cin >> pilihan;

        switch (pilihan) {
            case 1:
                tambahData(daftar);
                break;
            case 2:
                tampilkanData(daftar);
                break;
            case 0:
                cout << "Program selesai." << endl;
                break;
            default:
                cout << "Pilihan tidak valid." << endl;
        }
    } while (pilihan != 0);

    return 0;
}

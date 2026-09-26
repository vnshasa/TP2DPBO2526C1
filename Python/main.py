from Bioskop import Bioskop
from Cinema import Cinema
from Premiere import Premiere


def id_sudah_ada(daftar, id):
    for data in daftar:
        if data.getId() == id:
            return True
    return False


def siapkan_data(daftar):
    semua_data = []

    for data in daftar:
        semua_data.append([
            str(data.getId()),
            data.getNamaBioskop() + " / " + data.getLokasi() + " / " + str(data.getJumlahStudio()) + " studio",
            data.getJudulFilm() + " / " + data.getGenre() + " / " + data.getDurasi(),
            data.getSutradara() + " / " + data.getRumahProduksi() + " / " + str(data.getTahunRilis()),
            data.getStudio() + " / " + data.getJamTayang() + " / Rp" + str(data.getHargaTiket())
        ])

    return semua_data


def bungkus_teks(teks, lebar):
    hasil = []
    while len(teks) > lebar:
        posisi = lebar
        while posisi > 0 and teks[posisi] != " ":
            posisi -= 1
        if posisi == 0:
            posisi = lebar
        hasil.append(teks[:posisi])
        teks = teks[posisi:]
        teks = teks.lstrip()
    hasil.append(teks)
    return hasil


def tampilkan_garis(lebar):
    print("+", end="")
    for nilai in lebar:
        print("-" * (nilai + 2) + "+", end="")
    print()


def tampilkan_baris(row, lebar):
    kolom = []
    jumlah_baris = 1

    for i in range(len(row)):
        bagian = bungkus_teks(row[i], lebar[i])
        kolom.append(bagian)
        if len(bagian) > jumlah_baris:
            jumlah_baris = len(bagian)

    for baris_ke in range(jumlah_baris):
        print("|", end="")
        for i in range(len(row)):
            isi = kolom[i][baris_ke] if baris_ke < len(kolom[i]) else ""
            print(f" {isi:<{lebar[i]}} |", end="")
        print()


def tampilkan_data(daftar):
    header = ["ID", "BIOSKOP", "FILM", "PRODUKSI", "PREMIERE"]
    semua_data = siapkan_data(daftar)
    lebar = [4, 30, 43, 46, 29]

    print("\n+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+")
    print("                                                                                 DATA BIOSKOP                                   ")
    print("+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+")
    print("Semua atribut dari Bioskop, Cinema, dan Premiere ditampilkan.\n")

    tampilkan_garis(lebar)
    tampilkan_baris(header, lebar)
    tampilkan_garis(lebar)

    for i in range(len(semua_data)):
        tampilkan_baris(semua_data[i], lebar)
        if i < len(semua_data) - 1:
            tampilkan_garis(lebar)

    tampilkan_garis(lebar)
    print("Keterangan:")
    print("BIOSKOP = nama/lokasi/jumlah studio");
    print("FILM = judul/genre/durasi");
    print("PRODUKSI = sutradara/rumah produksi/tahun");
    print("PREMIERE = studio/jam/harga");
    print("Jumlah data: " + str(len(daftar)));


def tambah_data(daftar):
    print("\n+---------------------------+")
    print("         TAMBAH DATA         ")
    print("+---------------------------+")

    id = int(input("ID              : "))
    if id_sudah_ada(daftar, id):
        print("ID sudah digunakan.")
        return

    namaBioskop = input("Nama Bioskop    : ")
    lokasi = input("Lokasi          : ")
    jumlahStudio = int(input("Jumlah Studio   : "))
    judulFilm = input("Judul Film      : ")
    genre = input("Genre           : ")
    durasi = input("Durasi          : ")
    sutradara = input("Sutradara       : ")
    rumahProduksi = input("Rumah Produksi  : ")
    tahunRilis = int(input("Tahun Rilis     : "))
    studio = input("Studio          : ")
    jamTayang = input("Jam Tayang      : ")
    hargaTiket = int(input("Harga Tiket     : "))

    daftar.append(Premiere(
        id, namaBioskop, lokasi, jumlahStudio, judulFilm, genre, durasi,
        sutradara, rumahProduksi, tahunRilis, studio, jamTayang, hargaTiket
    ))
    print("\nData berhasil ditambahkan.\n")


def main():
    daftar = [
        Premiere(1, "VSA Cinema", "Bandung", 6, "Elemental", "Animasi, Petualangan, Komedi, Fantasi, Romantis", "101 menit", "Peter Sohn", "Walt Disney Pictures, Pixar Animation Studios", 2023, "Premiere 1", "19:00", 65000),
        Premiere(2, "VSA Cinema", "Bandung", 6, "Hoppers", "Animasi, Petualangan, Komedi, Sci-Fi", "105 menit", "Daniel Chong", "Walt Disney Pictures, Pixar Animation Studios", 2026, "Premiere 1", "16:30", 65000),
        Premiere(3, "VSA Cinema", "Bandung", 6, "Zootopia 2", "Animasi, Petualangan, Komedi, Kejahatan", "108 menit", "Jared Bush, Byron Howard", "Walt Disney Pictures, Walt Disney Animation Studios", 2025, "Premiere 2", "20:30", 70000),
        Premiere(4, "VSA Cinema", "Bandung", 6, "Moana 2", "Animasi, Petualangan, Musikal, Fantasi", "100 menit", "David G. Derrick Jr., Jason Hand, Dana Ledoux Miller", "Walt Disney Pictures, Walt Disney Animation Studios", 2024, "Premiere 2", "18:30", 70000),
        Premiere(5, "VSA Cinema", "Bandung", 6, "Inside Out 2", "Animasi, Komedi, Drama, Keluarga, Fantasi", "96 menit", "Kelsey Mann", "Walt Disney Pictures, Pixar Animation Studios", 2024, "Premiere 3", "22:30", 70000),
    ]

    print("\n--------------------------------------------------")
    print("                   VSA CINEMA")
    print("              DATA & PENAYANGAN FILM")
    print("--------------------------------------------------\n")

    pilihan = -1
    while pilihan != 0:
        print("\n\n[1] Tambah Data")
        print("[2] Tampilkan Data")
        print("[0] Keluar")
        print()
        pilihan = int(input("Pilih menu: "))

        if pilihan == 1:
            tambah_data(daftar)
        elif pilihan == 2:
            tampilkan_data(daftar)
        elif pilihan == 0:
            print("Program selesai.")
        else:
            print("Pilihan tidak valid.")


if __name__ == "__main__":
    main()

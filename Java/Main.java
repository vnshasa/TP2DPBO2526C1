import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static Scanner input = new Scanner(System.in);

    static boolean idSudahAda(ArrayList<Premiere> daftar, int id) {
        for (Premiere data : daftar) {
            if (data.getId() == id) return true;
        }
        return false;
    }

    static String[] headerTabel() {
        return new String[] {"ID", "BIOSKOP", "FILM", "PRODUKSI", "PREMIERE"};
    }

    static ArrayList<String[]> siapkanData(ArrayList<Premiere> daftar) {
        ArrayList<String[]> semuaData = new ArrayList<>();
        for (Premiere p : daftar) {
            semuaData.add(new String[] {
                String.valueOf(p.getId()),
                p.getNamaBioskop() + " / " + p.getLokasi() + " / " + p.getJumlahStudio() + " studio",
                p.getJudulFilm() + " / " + p.getGenre() + " / " + p.getDurasi(),
                p.getSutradara() + " / " + p.getRumahProduksi() + " / " + p.getTahunRilis(),
                p.getStudio() + " / " + p.getJamTayang() + " / Rp" + p.getHargaTiket()
            });
        }
        return semuaData;
    }

    static ArrayList<String> bungkusTeks(String teks, int lebar) {
        ArrayList<String> hasil = new ArrayList<>();
        while (teks.length() > lebar) {
            int posisi = lebar;
            while (posisi > 0 && teks.charAt(posisi) != ' ') posisi--;
            if (posisi == 0) posisi = lebar;
            hasil.add(teks.substring(0, posisi));
            teks = teks.substring(posisi);
            while (teks.startsWith(" ")) teks = teks.substring(1);
        }
        hasil.add(teks);
        return hasil;
    }

    static void tampilkanGaris(int[] lebar) {
        System.out.print("+");
        for (int nilai : lebar) {
            System.out.print("-".repeat(nilai + 2) + "+");
        }
        System.out.println();
    }

    static void tampilkanBaris(String[] row, int[] lebar) {
        ArrayList<ArrayList<String>> kolom = new ArrayList<>();
        int jumlahBaris = 1;

        for (int i = 0; i < row.length; i++) {
            ArrayList<String> bagian = bungkusTeks(row[i], lebar[i]);
            kolom.add(bagian);
            if (bagian.size() > jumlahBaris) jumlahBaris = bagian.size();
        }

        for (int barisKe = 0; barisKe < jumlahBaris; barisKe++) {
            System.out.print("|");
            for (int i = 0; i < row.length; i++) {
                String isi = barisKe < kolom.get(i).size() ? kolom.get(i).get(barisKe) : "";
                System.out.printf(" %-" + lebar[i] + "s |", isi);
            }
            System.out.println();
        }
    }

    static void tampilkanData(ArrayList<Premiere> daftar) {
        int[] lebar = {4, 30, 43, 46, 29};

        System.out.println("\n+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+");
        System.out.println("                                                                                 DATA BIOSKOP                                   ");
        System.out.println("+----------------------------------------------------------------------------------------------------------------------------------------------------------------------+");
        System.out.println("Semua atribut dari Bioskop, Cinema, dan Premiere ditampilkan.\n");

        tampilkanGaris(lebar);
        tampilkanBaris(headerTabel(), lebar);
        tampilkanGaris(lebar);

        for (int i = 0; i < daftar.size(); i++) {
            tampilkanBaris(daftar.get(i).data(), lebar);
            if (i < daftar.size() - 1) tampilkanGaris(lebar);
        }

    tampilkanGaris(lebar);
    System.out.println("Keterangan:");
    System.out.println("BIOSKOP = nama/lokasi/jumlah studio");
    System.out.println("FILM = judul/genre/durasi");
    System.out.println("PRODUKSI = sutradara/rumah produksi/tahun");
    System.out.println("PREMIERE = studio/jam/harga");
    System.out.println("Jumlah data: " + daftar.size());
    }

    static void tambahData(ArrayList<Premiere> daftar) {
        System.out.println("\n+---------------------------+");
        System.out.println("         TAMBAH DATA          ");
        System.out.println("+---------------------------+");

        System.out.print("ID              : ");
        int id = Integer.parseInt(input.nextLine());
        if (idSudahAda(daftar, id)) {
            System.out.println("ID sudah digunakan.");
            return;
        }

        System.out.print("Nama Bioskop    : "); String namaBioskop = input.nextLine();
        System.out.print("Lokasi          : "); String lokasi = input.nextLine();
        System.out.print("Jumlah Studio   : "); int jumlahStudio = Integer.parseInt(input.nextLine());
        System.out.print("Judul Film      : "); String judulFilm = input.nextLine();
        System.out.print("Genre           : "); String genre = input.nextLine();
        System.out.print("Durasi          : "); String durasi = input.nextLine();
        System.out.print("Sutradara       : "); String sutradara = input.nextLine();
        System.out.print("Rumah Produksi  : "); String rumahProduksi = input.nextLine();
        System.out.print("Tahun Rilis     : "); int tahunRilis = Integer.parseInt(input.nextLine());
        System.out.print("Studio          : "); String studio = input.nextLine();
        System.out.print("Jam Tayang      : "); String jamTayang = input.nextLine();
        System.out.print("Harga Tiket     : "); int hargaTiket = Integer.parseInt(input.nextLine());

        daftar.add(new Premiere(id, namaBioskop, lokasi, jumlahStudio, judulFilm, genre, durasi,
                sutradara, rumahProduksi, tahunRilis, studio, jamTayang, hargaTiket));
        System.out.println("\nData berhasil ditambahkan.\n");
    }

    public static void main(String[] args) {
        ArrayList<Premiere> daftar = new ArrayList<>();

        daftar.add(new Premiere(1, "VSA Cinema", "Bandung", 6, "Elemental", "Animasi, Petualangan, Komedi, Fantasi, Romantis", "101 menit", "Peter Sohn", "Walt Disney Pictures, Pixar Animation Studios", 2023, "Premiere 1", "19:00", 65000));
        daftar.add(new Premiere(2, "VSA Cinema", "Bandung", 6, "Hoppers", "Animasi, Petualangan, Komedi, Sci-Fi", "105 menit", "Daniel Chong", "Walt Disney Pictures, Pixar Animation Studios", 2026, "Premiere 1", "16:30", 65000));
        daftar.add(new Premiere(3, "VSA Cinema", "Bandung", 6, "Zootopia 2", "Animasi, Petualangan, Komedi, Kejahatan", "108 menit", "Jared Bush, Byron Howard", "Walt Disney Pictures, Walt Disney Animation Studios", 2025, "Premiere 2", "20:30", 70000));
        daftar.add(new Premiere(4, "VSA Cinema", "Bandung", 6, "Moana 2", "Animasi, Petualangan, Musikal, Fantasi", "100 menit", "David G. Derrick Jr., Jason Hand, Dana Ledoux Miller", "Walt Disney Pictures, Walt Disney Animation Studios", 2024, "Premiere 2", "18:30", 70000));
        daftar.add(new Premiere(5, "VSA Cinema", "Bandung", 6, "Inside Out 2", "Animasi, Komedi, Drama, Keluarga, Fantasi", "96 menit", "Kelsey Mann", "Walt Disney Pictures, Pixar Animation Studios", 2024, "Premiere 3", "22:30", 70000));

        System.out.println("\n--------------------------------------------------");
        System.out.println("                   VSA CINEMA");
        System.out.println("              DATA & PENAYANGAN FILM");
        System.out.println("--------------------------------------------------\n");

        int pilihan = -1;
        do {
            System.out.println("\n\n[1] Tambah Data");
            System.out.println("[2] Tampilkan Data");
            System.out.println("[0] Keluar");
            System.out.println();
            System.out.print("Pilih menu: ");
            pilihan = Integer.parseInt(input.nextLine());

            switch (pilihan) {
                case 1: tambahData(daftar); break;
                case 2: tampilkanData(daftar); break;
                case 0: System.out.println("Program selesai."); break;
                default: System.out.println("Pilihan tidak valid.");
            }
        } while (pilihan != 0);
    }
}

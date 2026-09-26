# TP2 DPBO 2025/2026 - C1

## Janji
Saya Vanisha Septiani Auliaputri dengan NIM 2510735 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

---

## Tema Program
Program ini merupakan pengembangan dari tema TP1, yaitu pengelolaan data pada bioskop.
Pada TP2, tema dikembangkan menjadi tiga class dengan konsep **Multilevel Inheritance**:

Bioskop
   |
   | extends
   v
Cinema
   |
   | extends
   v
Premiere

## Class dan Atribut
1. Bioskop
Class dasar yang menyimpan informasi umum bioskop.
Atribut:
- id
- namaBioskop
- lokasi
- jumlahStudio
Methods:
- Constructor
- Getter
- Setter

2. Cinema
Class turunan dari Bioskop yang menambahkan informasi film.
Atribut tambahan:
- judulFilm
- genre
- durasi
- sutradara
- rumahProduksi
- tahunRilis
Karena Cinema mewarisi Bioskop, object Cinema juga memiliki:
- id
- namaBioskop
- lokasi
- jumlahStudio
Methods:
- Constructor
- Getter
- Setter

3. Premiere
Class turunan dari Cinema yang menambahkan informasi penayangan.
Atribut tambahan:
- studio
- jamTayang
- hargaTiket
Karena Premiere merupakan turunan dari Cinema, object Premiere membawa seluruh atribut dari Bioskop, Cinema, dan Premiere.
Methods:
- Constructor
- Getter
- Setter
- data()
Method data() digunakan untuk mengumpulkan seluruh data object Premiere agar dapat ditampilkan dalam satu tabel lengkap.
Encapsulation
Atribut pada class dibuat private dan diakses menggunakan getter dan setter.
Dengan demikian, atribut tidak diakses secara langsung dari luar class, melainkan melalui method yang tersedia pada class.

## Design Diagram
sesuai pada file desainDiagram.jpeg

## Data 5 Object Awal
Sebelum menerima input dari user, program membuat 5 object awal:
1. Elemental
2. Hoppers
3. Zootopia 2
4. Moana 2
5. Inside Out 2
Data bioskop dan penayangan yang digunakan merupakan data contoh untuk kebutuhan program.
Jadwal Object Awal
Film	Studio	Jam Tayang
Hoppers	Premiere 1	16:30
Elemental	Premiere 1	19:00
Moana 2	Premiere 2	18:30
Zootopia 2	Premiere 2	20:30
Inside Out 2	Premiere 3	21:00


## Data Testcase
Setiap bahasa memiliki testcase tambahan yang berbeda untuk menguji fitur penambahan data.
C++ - Encanto
- Judul: Encanto
- Genre: Animasi, Musikal, Keluarga, Fantasi, Komedi
- Durasi: 102 menit
- Sutradara: Jared Bush, Byron Howard, Charise Castro Smith
- Rumah Produksi: Walt Disney Pictures, Walt Disney Animation Studios
- Tahun Rilis: 2021

Data bioskop dan penayangan:
- ID: 6
- Nama Bioskop: VSA Cinema
- Lokasi: Bandung
- Jumlah Studio: 6
- Studio: Premiere 4
- Jam Tayang: 17:00
- Harga Tiket: 75000


Java - Toy Story 5
- Judul: Toy Story 5
- Genre: Animasi, Petualangan, Komedi, Keluarga
- Durasi: 102 menit
- Sutradara: Andrew Stanton
- Rumah Produksi: Walt Disney Pictures, Pixar Animation Studios
- Tahun Rilis: 2026

Data bioskop dan penayangan:
- ID: 6
- Nama Bioskop: VSA Cinema
- Lokasi: Bandung
- Jumlah Studio: 6
- Studio: Premiere 4
- Jam Tayang: 17:00
- Harga Tiket: 75000


Python - Aladdin
- Judul: Aladdin
- Genre: Petualangan, Fantasi, Musikal, Keluarga
- Durasi: 128 menit
- Sutradara: Guy Ritchie
- Rumah Produksi: Walt Disney Pictures
- Tahun Rilis: 2019

Data bioskop dan penayangan:
- ID: 6
- Nama Bioskop: VSA Cinema
- Lokasi: Bandung
- Jumlah Studio: 6
- Studio: Premiere 5
- Jam Tayang: 17:00
- Harga Tiket: 75000


PHP - Maleficent
- Judul: Maleficent
- Genre: Fantasi, Petualangan, Aksi, Keluarga
- Durasi: 97 menit
- Sutradara: Robert Stromberg
- Rumah Produksi: Walt Disney Pictures, Roth Films
- Tahun Rilis: 2014
- Foto Produk: gambar/maleficent.png

Data bioskop dan penayangan:
- ID: 6
- Nama Bioskop: VSA Cinema
- Lokasi: Bandung
- Jumlah Studio: 6
- Studio: Premiere 5
- Jam Tayang: 17:00
- Harga Tiket: 75000

## Alur Program
1. Program membuat array/list untuk menyimpan object Premiere.
2. Program membuat 5 object awal sebelum menerima input user.
3. Program menampilkan menu.
4. User memilih menu Tambah Data.
5. User memasukkan data bioskop, data film, dan data penayangan.
6. Data tersebut digunakan untuk membuat object Premiere.
7. Object baru dimasukkan ke dalam array/list.
8. User dapat memilih Tampilkan Data.
9. Seluruh atribut dari tiga level class ditampilkan dalam satu tabel lengkap.
10. Program berakhir ketika user memilih menu Keluar.
Menu pada C++, Java, dan Python:
[1] Tambah Data
[2] Tampilkan Data
[0] Keluar

## Implementasi Bahasa
Program dibuat dalam empat bahasa:
- C++
- Java
- Python
- PHP
C++
Program berbasis CLI/terminal dan dapat menerima input user untuk menambahkan data.
Java
Program berbasis CLI/terminal dan dapat menerima input user untuk menambahkan data.
Python
Program berbasis CLI/terminal dan dapat menerima input user untuk menambahkan data.
PHP
Program berbasis web menggunakan HTML Form untuk menerima input user.
Pada PHP, atribut foto_produk digunakan untuk menyimpan path file gambar lokal.
PHP tidak menggunakan database. Data disimpan sementara menggunakan $_SESSION.
Fitur Program
- Tambah Data
- Tampilkan Data
- Keluar
Program TP2 menggunakan fitur Add saja sesuai ketentuan praktikum.
Seluruh data dari class Bioskop, Cinema, dan Premiere ditampilkan dalam satu tabel lengkap.
Testcase
File testcase tersedia pada masing-masing folder bahasa:
CPP/testcase.txt
Java/testcase.txt
Python/testcase.txt
PHP/testcase.txt

Testcase digunakan untuk menguji proses:
Tambah Data
     ↓
Input Data
     ↓
Tampilkan Data
     ↓
Data bertambah
     ↓
Keluar

## Struktur Folder

```text
TP2DPBO2526C1/
├── CPP/
│   ├── Bioskop.h
│   ├── Cinema.h
│   ├── Premiere.h
│   ├── main.cpp
│   └── testcase.txt
│
├── Java/
│   ├── Bioskop.java
│   ├── Cinema.java
│   ├── Premiere.java
│   ├── Main.java
│   └── testcase.txt
│
├── Python/
│   ├── Bioskop.py
│   ├── Cinema.py
│   ├── Premiere.py
│   ├── main.py
│   └── testcase.txt
│
├── PHP/
│   ├── Bioskop.php
│   ├── Cinema.php
│   ├── Premiere.php
│   ├── index.php
│   ├── testcase.txt
│   └── gambar/
│       ├── elemental.png
│       ├── hoppers.png
│       ├── inside_out_2.png
│       ├── maleficent.png
│       ├── moana_2.png
│       └── zootopia_2.png
│
├── Dokumentasi/
│   ├── CPP
│   ├── JAVA
│   ├── PYTHON
│   ├── PHP
│
├── README.md
└── design_diagram.png

## Cara Menjalankan
C++
Masuk ke folder CPP, lalu compile:
g++ main.cpp -o main

Kemudian jalankan program.
Java
Masuk ke folder Java:
javac *.java
java Main

File hasil compile seperti .class tidak disertakan ke repository.
Python
Masuk ke folder Python:
python main.py

PHP
Masukkan folder project ke dalam folder htdocs XAMPP.
Contoh:
C:\xampp\htdocs\TP2\

Kemudian aktifkan Apache pada XAMPP dan akses:
http://localhost/TP2/PHP/

## Dokumentasi
Dokumentasi program berupa screenshot hasil menjalankan program pada masing-masing bahasa.
Dokumentasi menunjukkan:
- 5 object awal berhasil ditampilkan.
- Program dapat menambahkan data baru.
- Data baru berhasil ditampilkan bersama data sebelumnya.
Screenshot dokumentasi disimpan pada folder Dokumentasi.

## Catatan
- Program menggunakan konsep OOP dan Multilevel Inheritance.
- Setiap class memiliki minimal 3 atribut.
- Atribut menggunakan encapsulation dengan getter dan setter.
- Program tidak menggunakan database.
- PHP menggunakan foto_produk berupa path file gambar lokal.
- File hasil compile seperti .class, .o, dan file cache Python tidak disertakan dalam repository.

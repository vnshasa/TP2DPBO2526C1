<?php
require_once 'Premiere.php';
session_start();

if (!isset($_SESSION['daftarPremiere'])) {
    $_SESSION['daftarPremiere'] = [
        new Premiere(1, 'VSA Cinema', 'Bandung', 6, 'Elemental', 'Animasi, Petualangan, Komedi, Fantasi, Romantis', '101 menit', 'Peter Sohn', 'Walt Disney Pictures, Pixar Animation Studios', 2023, 'Premiere 1', '19:00', 65000, 'gambar/elemental.png'),
        new Premiere(2, 'VSA Cinema', 'Bandung', 6, 'Hoppers', 'Animasi, Petualangan, Komedi, Sci-Fi', '105 menit', 'Daniel Chong', 'Walt Disney Pictures, Pixar Animation Studios', 2026, 'Premiere 1', '16:30', 65000, 'gambar/hoppers.png'),
        new Premiere(3, 'VSA Cinema', 'Bandung', 6, 'Zootopia 2', 'Animasi, Petualangan, Komedi, Kejahatan', '108 menit', 'Jared Bush, Byron Howard', 'Walt Disney Pictures, Walt Disney Animation Studios', 2025, 'Premiere 2', '20:30', 70000, 'gambar/zootopia_2.png'),
        new Premiere(4, 'VSA Cinema', 'Bandung', 6, 'Moana 2', 'Animasi, Petualangan, Musikal, Fantasi', '100 menit', 'David G. Derrick Jr., Jason Hand, Dana Ledoux Miller', 'Walt Disney Pictures, Walt Disney Animation Studios', 2024, 'Premiere 2', '18:30', 70000, 'gambar/moana_2.png'),
        new Premiere(5, 'VSA Cinema', 'Bandung', 6, 'Inside Out 2', 'Animasi, Komedi, Drama, Keluarga, Fantasi', '96 menit', 'Kelsey Mann', 'Walt Disney Pictures, Pixar Animation Studios', 2024, 'Premiere 3', '22:30', 70000, 'gambar/inside_out_2.png')
    ];
}

$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $sudahAda = false;
    foreach ($_SESSION['daftarPremiere'] as $data) {
        if ($data->getId() === $id) {
            $sudahAda = true;
            break;
        }
    }

    if ($sudahAda) {
        $pesan = 'ID sudah digunakan.';
    } else {
        $namaBioskop = trim($_POST['namaBioskop']);
        $lokasi = trim($_POST['lokasi']);
        $jumlahStudio = (int)$_POST['jumlahStudio'];
        $judulFilm = trim($_POST['judulFilm']);
        $genre = trim($_POST['genre']);
        $durasi = trim($_POST['durasi']);
        $sutradara = trim($_POST['sutradara']);
        $rumahProduksi = trim($_POST['rumahProduksi']);
        $tahunRilis = (int)$_POST['tahunRilis'];
        $studio = trim($_POST['studio']);
        $jamTayang = trim($_POST['jamTayang']);
        $hargaTiket = (int)$_POST['hargaTiket'];
        $fotoProduk = trim($_POST['foto_produk']);

        $_SESSION['daftarPremiere'][] = new Premiere(
            $id, $namaBioskop, $lokasi, $jumlahStudio,
            $judulFilm, $genre, $durasi,
            $sutradara, $rumahProduksi, $tahunRilis,
            $studio, $jamTayang, $hargaTiket, $fotoProduk
        );

        $pesan = 'Data premiere berhasil ditambahkan.';
    }
}

$daftarPremiere = $_SESSION['daftarPremiere'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VSA Cinema</title>
<style>
* { box-sizing: border-box; }
body { margin: 0; font-family: Arial, sans-serif; background: #f4f1ea; color: #24211d; }
header { background: #171512; color: #fff; padding: 38px 6%; }
.brand { letter-spacing: .16em; text-transform: uppercase; font-size: 13px; color: #d8bd84; }
h1 { margin: 8px 0 10px; font-size: 38px; }
.subtitle { margin: 0; color: #d7d3cb; max-width: 760px; line-height: 1.6; }
main { width: 94%; max-width: 1380px; margin: 28px auto 50px; }
.grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 22px; }
.card { background: #fff; border-radius: 18px; padding: 20px; box-shadow: 0 10px 28px rgba(30,25,20,.08); border: 1px solid #ebe5db; }
.label { font-size: 12px; color: #8b8070; text-transform: uppercase; letter-spacing: .12em; }
.value { font-size: 25px; font-weight: 700; margin-top: 8px; }
.section { background: #fff; border-radius: 20px; padding: 24px; margin-bottom: 22px; box-shadow: 0 10px 28px rgba(30,25,20,.08); border: 1px solid #ebe5db; }
.section h2 { margin-top: 0; }
.form { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
.full { grid-column: 1 / -1; }
label { display: block; font-size: 13px; font-weight: 700; margin-bottom: 7px; }
input { width: 100%; padding: 12px 13px; border: 1px solid #d8d0c4; border-radius: 11px; font-size: 14px; }
input:focus { outline: 2px solid #d8bd84; border-color: #b79b63; }
button { border: none; background: #171512; color: #fff; padding: 13px 20px; border-radius: 11px; cursor: pointer; font-weight: 700; }
button:hover { opacity: .9; }
.alert { background: #f7eedb; border: 1px solid #ead8ae; padding: 12px 14px; border-radius: 10px; margin-bottom: 16px; }
.table-wrap { overflow-x: auto; }
table { width: 100%; border-collapse: collapse; min-width: 1250px; }
th, td { padding: 11px 12px; border-bottom: 1px solid #ece6dd; text-align: left; vertical-align: middle; font-size: 13px; }
th { background: #211e1a; color: #fff; position: sticky; top: 0; }
.poster { width: 58px; height: 78px; object-fit: cover; border-radius: 8px; display: block; }
.badge { display: inline-block; padding: 5px 8px; border-radius: 999px; background: #f2eadb; font-size: 11px; font-weight: 700; }
footer { text-align: center; color: #7a7267; padding: 0 0 30px; font-size: 13px; }
@media (max-width: 850px) { .grid, .form { grid-template-columns: 1fr; } h1 { font-size: 30px; } }
</style>
</head>
<body>
<header>
  <h1>VSA Cinema</h1>
</header>

<main>
  <div class="grid">
    <div class="card"><div class="label">Total data</div><div class="value"><?= count($daftarPremiere); ?> Premiere</div></div>
    <div class="card"><div class="label">Object awal</div><div class="value">5 Film</div></div>
  </div>

  <section class="section">
    <h2>Tambah Data Premiere</h2>
    <?php if ($pesan !== ''): ?><div class="alert"><?= htmlspecialchars($pesan); ?></div><?php endif; ?>
    <form method="post" class="form">
      <div><label>ID</label><input type="number" name="id" min="1" required></div>
      <div><label>Nama Bioskop</label><input type="text" name="namaBioskop" required></div>
      <div><label>Lokasi</label><input type="text" name="lokasi" required></div>
      <div><label>Jumlah Studio</label><input type="number" name="jumlahStudio" min="1" required></div>
      <div><label>Judul Film</label><input type="text" name="judulFilm" required></div>
      <div><label>Genre</label><input type="text" name="genre" required></div>
      <div><label>Durasi</label><input type="text" name="durasi" placeholder="contoh: 102 menit" required></div>
      <div><label>Sutradara</label><input type="text" name="sutradara" required></div>
      <div class="full"><label>Rumah Produksi</label><input type="text" name="rumahProduksi" required></div>
      <div><label>Tahun Rilis</label><input type="number" name="tahunRilis" required></div>
      <div><label>Studio</label><input type="text" name="studio" placeholder="contoh: Premiere 3" required></div>
      <div><label>Jam Tayang</label><input type="text" name="jamTayang" placeholder="20:30" required></div>
      <div><label>Harga Tiket</label><input type="number" name="hargaTiket" min="0" required></div>
      <div class="full"><label>Foto Produk (path lokal)</label><input type="text" name="foto_produk" placeholder="contoh: gambar/encanto.png" required></div>
      <div class="full"><button type="submit">+ Tambahkan Data</button></div>
    </form>
  </section>

  <section class="section">
    <h2>Data Bioskop & Premiere</h2>
    <div class="table-wrap">
      <table>
        <thead><tr>
          <th>ID</th><th>Nama Bioskop</th><th>Lokasi</th><th>Jml Studio</th><th>Foto</th>
          <th>Judul Film</th><th>Genre</th><th>Durasi</th><th>Sutradara</th><th>Rumah Produksi</th>
          <th>Tahun Rilis</th><th>Studio</th><th>Jam Tayang</th><th>Harga Tiket</th>
        </tr></thead>
        <tbody>
        <?php foreach ($daftarPremiere as $data): ?>
          <tr>
            <td><?= htmlspecialchars($data->getId()); ?></td>
            <td><?= htmlspecialchars($data->getNamaBioskop()); ?></td>
            <td><?= htmlspecialchars($data->getLokasi()); ?></td>
            <td><span class="badge"><?= htmlspecialchars($data->getJumlahStudio()); ?></span></td>
            <td><img class="poster" src="<?= htmlspecialchars($data->getFotoProduk()); ?>" alt="Poster <?= htmlspecialchars($data->getJudulFilm()); ?>"></td>
            <td><b><?= htmlspecialchars($data->getJudulFilm()); ?></b></td>
            <td><?= htmlspecialchars($data->getGenre()); ?></td>
            <td><?= htmlspecialchars($data->getDurasi()); ?></td>
            <td><?= htmlspecialchars($data->getSutradara()); ?></td>
            <td><?= htmlspecialchars($data->getRumahProduksi()); ?></td>
            <td><?= htmlspecialchars($data->getTahunRilis()); ?></td>
            <td><?= htmlspecialchars($data->getStudio()); ?></td>
            <td><?= htmlspecialchars($data->getJamTayang()); ?></td>
            <td>Rp <?= number_format($data->getHargaTiket(), 0, ',', '.'); ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
</main>
<footer>TP2 DPBO 2026 • Pengembangan tema Bioskop dengan Multilevel Inheritance</footer>
</body>
</html>

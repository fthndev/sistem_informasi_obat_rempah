<?php 
session_start();

if(!isset($_SESSION['user'])){
    echo "<script>
        alert('anda harus login terlebih dahulu!');
        window.location.href='login.php';
    </script>";
}
include './style/header.php'; // Menghubungkan header dan koneksi database

// Ambil daftar semua khasiat dari tabel untuk mengisi datalist
$datalist_query = mysqli_query($connect, "SELECT DISTINCT nama_khasiat FROM khasiat");
$datalist_options = [];
while ($row = mysqli_fetch_assoc($datalist_query)) {
    $datalist_options[] = $row['nama_khasiat'];
}

$results = [];
if (isset($_POST['keluhan'])) {
    $keluhan = mysqli_real_escape_string($connect, $_POST['keluhan']);
    $results = mysqli_query($connect, "
        SELECT rempah.nama_rempah, jenis.nama_jenis, khasiat.nama_khasiat, khasiat.nama_keluhan, olahan.nama_olahan, olahan.resep
        FROM rempah
        JOIN jenis ON rempah.id_jenis = jenis.id_jenis
        JOIN khasiat ON rempah.id_rempah = khasiat.id_rempah
        JOIN olahan ON rempah.id_rempah = olahan.id_rempah
        WHERE khasiat.nama_khasiat LIKE '%$keluhan%' OR khasiat.nama_keluhan LIKE '%$keluhan%'
    ");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekomendasi Rempah</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Rekomendasi Rempah</h1>


        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label for="keluhan" class="form-label">Masukkan Keluhan atau Gejala:</label>
                <input list="keluhan-list" id="keluhan" name="keluhan" class="form-control"
                    placeholder="Contoh: Bakteri, batuk">
                <datalist id="keluhan-list">
                    <?php foreach ($datalist_options as $option): ?>
                    <option value="<?= htmlspecialchars($option) ?>"></option>
                    <?php endforeach; ?>
                </datalist>
            </div>
            <button type="submit" class="btn btn-primary">Cari Obat</button>
        </form>

        <?php if (!empty($results) && mysqli_num_rows($results) > 0): ?>
        <div class="card p-3">
            <h2 class="card-title">Hasil Rekomendasi</h2>
            <ul class="list-group">
                <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($row['nama_rempah']) ?></strong>
                    (<?= htmlspecialchars($row['nama_jenis']) ?>):
                    Khasiat: <?= htmlspecialchars($row['nama_khasiat']) ?>.
                    Keluhan: <?= htmlspecialchars($row['nama_keluhan']) ?>.
                    <em>Olahan:</em> <?= htmlspecialchars($row['nama_olahan']) ?> -
                    Resep: <?= htmlspecialchars($row['resep']) ?>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php else: ?>
        <p class="text-muted">Tidak ada obat yang ditemukan untuk keluhan tersebut.</p>
        <?php endif; ?>
    </div>
    <div class="footer">
        <?php require './style/foot.php' ?>
    </div>
</body>
</html>
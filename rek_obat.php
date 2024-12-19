<?php 
session_start();
include './style/header.php'; // Menghubungkan header dan koneksi database

$results = [];
if (isset($_POST['keluhan'])) {
    $keluhan = mysqli_real_escape_string($connect, $_POST['keluhan']);
    $results = mysqli_query($connect, "
        SELECT rempah.nama_rempah, jenis.nama_jenis, khasiat.nama_khasiat, olahan.nama_olahan, olahan.resep
        FROM rempah
        JOIN jenis ON rempah.id_jenis = jenis.id_jenis
        JOIN khasiat ON rempah.id_rempah = khasiat.id_rempah
        JOIN olahan ON rempah.id_rempah = olahan.id_rempah
        WHERE khasiat.nama_khasiat LIKE '%$keluhan%'
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

        <!-- Form Pencarian -->
        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label for="keluhan" class="form-label">Masukkan Keluhan atau Gejala:</label>
                <input type="text" id="keluhan" name="keluhan" class="form-control" placeholder="Contoh: Demam, batuk">
            </div>
            <button type="submit" class="btn btn-primary">Cari Obat</button>
        </form>

        <!-- Hasil Rekomendasi -->
        <?php if (!empty($results) && mysqli_num_rows($results) > 0): ?>
        <div class="card p-3">
            <h2 class="card-title">Hasil Rekomendasi</h2>
            <ul class="list-group">
                <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($row['nama_rempah']) ?></strong>
                    (<?= htmlspecialchars($row['nama_jenis']) ?>):
                    <?= htmlspecialchars($row['nama_khasiat']) ?>.
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
</body>

</html>
<?php require './style/foot.php' ?>
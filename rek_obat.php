<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "obat_tradisional");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$results = [];
if (isset($_POST['keluhan'])) {
    $keluhan = $_POST['keluhan'];
    $results = $conn->query("
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Obat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Rekomendasi Obat</h1>

        <!-- Form Pencarian -->
        <form method="POST" class="mb-4">
            <label for="keluhan" class="block text-lg mb-2">Masukkan Keluhan atau Gejala:</label>
            <input type="text" id="keluhan" name="keluhan" placeholder="Contoh: Demam, batuk" class="border p-2 w-full">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Cari Obat</button>
        </form>

        <!-- Hasil Rekomendasi -->
        <?php if (!empty($results) && $results->num_rows > 0): ?>
        <div class="bg-white p-4 rounded shadow-md">
            <h2 class="text-xl font-bold mb-2">Hasil Rekomendasi</h2>
            <ul class="list-disc pl-6">
                <?php while ($row = $results->fetch_assoc()): ?>
                <li>
                    <strong><?= $row['nama_rempah'] ?></strong> (<?= $row['nama_jenis'] ?>):
                    <?= $row['nama_khasiat'] ?>.
                    <em>Olahan:</em> <?= $row['nama_olahan'] ?> (<?= $row['resep'] ?>)
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php else: ?>
        <p class="text-gray-600">Tidak ada obat yang ditemukan untuk keluhan tersebut.</p>
        <?php endif; ?>
    </div>
</body>

</html>
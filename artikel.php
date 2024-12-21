
<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>
            alert('anda harus login terlebih dahulu!');
            window.location.href='login.php';
        </script>";
    }
include './style/header.php'; 


$search_keyword = '';


if (isset($_GET['search'])) {
    $search_keyword = mysqli_real_escape_string($connect, $_GET['search']);
}

if ($search_keyword !== '') {
   
    $artikel = "SELECT * FROM artikel WHERE judul LIKE '%$search_keyword%'";
} else {

    $artikel = "SELECT * FROM artikel LIMIT 25;

";
}

$result = mysqli_query($connect, $artikel);
$hasil = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Obat dan Rempah</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <section id="search" class="search-container">
        <form action="artikel.php" method="get">
            <input 
                type="text" 
                name="search" 
                placeholder="Cari artikel tentang rempah..." 
                value="<?php echo htmlspecialchars($search_keyword); ?>" 
                >
            <button type="submit" class="btn btn-search">Cari</button>
        </form>
    </section>


    <section id="artikel" class="artikel-container">
        <div class="con">
            <div class="artikel-grid">
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="artikel-card">
                            <div class="card-image">
                                <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar Artikel">
                            </div>
                            <div class="card-content">
                                <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
                                <p><?php echo htmlspecialchars(substr($row['deskripsi'], 0, 100)) . '...'; ?></p>
                                <a href="<?php echo htmlspecialchars($row['link']); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Baca Selengkapnya</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>
                        <?php if ($search_keyword): ?>
                            Tidak ada artikel ditemukan untuk keyword <strong><?php echo htmlspecialchars($search_keyword); ?></strong>.
                        <?php else: ?>
                            Belum ada artikel yang tersedia.
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</body>
</html>
<?php require './style/foot.php'; ?>
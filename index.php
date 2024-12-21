<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>
            alert('anda harus login terlebih dahulu!');
            window.location.href='login.php';
        </script>";
    }
?>
<?php require './style/header.php'; 
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
<style>

#artikel {
    background-color: #e0e0e0;
    position: relative;
    padding-bottom: 80px;
}


.card-img-wrapper {
    height: 200px;
    overflow: hidden;
}

.card-img-wrapper img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    position: relative;
    padding-bottom: 50px;

}


.lihat-lainnya {
    position: absolute;
    bottom: 20px;
    right: 20px;

}

header {
    background: url('https://asset.kompas.com/crops/c-gq-iWo6NQ5OIULTIUXlAWRoTs=/0x84:1440x1044/1200x800/data/photo/2023/04/27/6449d61265170.png') no-repeat center center;
    background-size: cover;
    color: #ffffff;
    text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
    position: relative;
    height: 120%;
}

header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}


header .container {
    position: relative;
    z-index: 2;
}


header h1 {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 700;
    font-size: 3rem;
    color: #f8f9fa;
    margin-bottom: 20px;
}


header p.lead {
    font-size: 1.5rem;
    color: #f8f9fa;
    margin-bottom: 0;
}
</style>
</style>
</head>

<body>
    <header class="text-center py-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Portal Kesehatan</h1>
            <p class="lead">Cari informasi kesehatan dan solusi herbal untuk berbagai penyakit.</p>
        </div>
    </header>

    <section id="artikel" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Artikel Kesehatan</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="https://diskes.badungkab.go.id/storage/diskes/image/WhatsApp%20Image%202023-01-30%20at%2013.55.59.jpeg"
                                class="card-img-top img-fluid" alt="Manfaat Daun Kelor">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Manfaat Daun Kelor</h5>
                            <p class="card-text">
                                Daun kelor (Moringa Oleifera) sejak lama digunakan sebagai obat tradisional yang baik
                                untuk mencegah kanker dan menjaga tekanan darah.
                            </p>
                            <a href="https://diskes.badungkab.go.id/artikel/47615-manfaat-daun-kelor-untuk-kesehatan"
                                class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/06/manfaat-temulawak-untuk-kesehatan-tubuh-750x375.jpg"
                                class="card-img-top img-fluid" alt="Khasiat Temulawak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Khasiat Temulawak</h5>
                            <p class="card-text">
                                Temulawak efektif untuk mengatasi masalah pencernaan dan meningkatkan daya tahan tubuh.
                            </p>
                            <a href="https://fahum.umsu.ac.id/blog/manfaat-temulawak-untuk-kesehatan-tubuh/"
                                class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/10/10-manfaat-jahe-bagi-kesehatan-tubuh-750x375.jpg"
                                class="card-img-top img-fluid" alt="Rahasia Jahe">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rahasia Jahe</h5>
                            <p class="card-text">
                                Jahe dikenal sebagai rempah yang membantu meredakan mual dan menghangatkan tubuh.
                            </p>
                            <a href="https://fahum.umsu.ac.id/blog/10-manfaat-jahe-bagi-kesehatan-tubuh/"
                                class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lihat-lainnya">
            <a href="artikel.php" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </section>
    <section id="pencarian" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Pencarian Obat dan Rempah</h2>
            <form method="POST" action="rek_obat.php"class="mb-4">
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
        </div>
    </section>
    <?php require './style/foot.php' ?>


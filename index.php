<?php require './style/header.php' ?>
    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Portal Kesehatan</h1>
            <p class="lead">Cari informasi kesehatan dan solusi herbal untuk berbagai penyakit.</p>
        </div>
    </header>

    <!-- Artikel Section -->
    <section id="artikel" class="py-5">
        <div class="container">
            <h2 class="mb-4">Artikel Kesehatan</h2>
            <div class="row">
                <!-- Artikel 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Artikel 1">
                        <div class="card-body">
                            <h5 class="card-title">Manfaat Daun Kelor</h5>
                            <p class="card-text">Daun kelor memiliki berbagai manfaat kesehatan, termasuk memperbaiki fungsi hati dan mengontrol gula darah.</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Artikel 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Artikel 2">
                        <div class="card-body">
                            <h5 class="card-title">Khasiat Temulawak</h5>
                            <p class="card-text">Temulawak efektif untuk mengatasi masalah pencernaan dan meningkatkan daya tahan tubuh.</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Artikel 3">
                        <div class="card-body">
                            <h5 class="card-title">Rahasia Jahe</h5>
                            <p class="card-text">Jahe dikenal sebagai rempah yang membantu meredakan mual dan menghangatkan tubuh.</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pencarian Section -->
    <section id="pencarian" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Pencarian Obat dan Rempah</h2>
            <form action="hasil.php" method="POST">
                <div class="mb-3">
                    <label for="penyakit" class="form-label">Pilih Penyakit:</label>
                    <select id="penyakit" name="penyakit" class="form-select">
                        <option value="flu">Flu</option>
                        <option value="pencernaan">Masalah Pencernaan</option>
                        <option value="diabetes">Diabetes</option>
                    </select>
                </div>
                <a href="hasil.php?penyakit=<?= isset($_POST['penyakit']) ? $_POST['penyakit'] : '' ?> "><button class="btn btn-primary">Cari</button></a>
            </form>
        </div>
    </section>
<?php require './style/foot.php' ?>
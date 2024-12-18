<?php require './style/header.php' ?>
<style>
        /* Background abu-abu */
        #artikel {
            background-color: #e0e0e0; /* Warna abu-abu */
            position: relative; /* Agar tombol tetap berada di dalam section */
            padding-bottom: 80px; /* Tambahkan padding agar tombol tidak terlalu menempel */
        }

        /* Wrapper gambar agar tidak melebar */
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
        justify-content: flex-end; /* Letakkan konten ke bawah */
        position: relative;
        padding-bottom: 50px; /* Beri jarak untuk tombol */
    }

        /* Tombol di pojok kanan bawah */
        .lihat-lainnya {
            position: absolute; /* Mengunci posisi tombol di dalam section */
            bottom: 20px; /* Jarak dari bawah */
            right: 20px; /* Jarak dari kanan */
        }
        /* Gaya Header dengan Background Gambar */
        header {
            background: url('https://asset.kompas.com/crops/c-gq-iWo6NQ5OIULTIUXlAWRoTs=/0x84:1440x1044/1200x800/data/photo/2023/04/27/6449d61265170.png') no-repeat center center;
            background-size: cover; /* Menutupi seluruh area header */
            color: #ffffff; /* Warna teks putih murni */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7); /* Efek bayangan untuk teks */
            position: relative;
            height: 120%;
        }

        /* Overlay (Opsional, jika background terlalu terang) */
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3); /* Overlay gelap transparan */
            z-index: 1;
        }

        /* Konten Header */
        header .container {
            position: relative;
            z-index: 2;
        }

        /* Judul Utama */
        header h1 {
            font-family: 'Poppins', Arial, sans-serif; /* Font dari Google Fonts */
            font-weight: 700; /* Tebal */
            font-size: 3rem; /* Ukuran font besar */
            color: #f8f9fa; /* Warna putih terang */
            margin-bottom: 20px;
        }

        /* Subjudul */
        header p.lead {
            font-size: 1.5rem; /* Ukuran font subjudul */
            color: #f8f9fa; /* Warna putih terang */
            margin-bottom: 0;
        }
    </style>
    </style>
</head>
<body>
    <!-- Hero Section -->
    <header class="text-center py-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Portal Kesehatan</h1>
            <p class="lead">Cari informasi kesehatan dan solusi herbal untuk berbagai penyakit.</p>
        </div>
    </header>

<!-- Artikel Section -->
<section id="artikel" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Artikel Kesehatan</h2>
        <div class="row">
            <!-- Artikel 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-wrapper">
                        <img src="https://diskes.badungkab.go.id/storage/diskes/image/WhatsApp%20Image%202023-01-30%20at%2013.55.59.jpeg" class="card-img-top img-fluid" alt="Manfaat Daun Kelor">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Daun Kelor</h5>
                        <p class="card-text">
                            Daun kelor (Moringa Oleifera) sejak lama digunakan sebagai obat tradisional yang baik untuk mencegah kanker dan menjaga tekanan darah.
                        </p>
                        <a href="https://diskes.badungkab.go.id/artikel/47615-manfaat-daun-kelor-untuk-kesehatan" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Artikel 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-wrapper">
                        <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/06/manfaat-temulawak-untuk-kesehatan-tubuh-750x375.jpg" class="card-img-top img-fluid" alt="Khasiat Temulawak">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Khasiat Temulawak</h5>
                        <p class="card-text">
                            Temulawak efektif untuk mengatasi masalah pencernaan dan meningkatkan daya tahan tubuh.
                        </p>
                        <a href="https://fahum.umsu.ac.id/blog/manfaat-temulawak-untuk-kesehatan-tubuh/" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Artikel 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-wrapper">
                        <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/10/10-manfaat-jahe-bagi-kesehatan-tubuh-750x375.jpg" class="card-img-top img-fluid" alt="Rahasia Jahe">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rahasia Jahe</h5>
                        <p class="card-text">
                            Jahe dikenal sebagai rempah yang membantu meredakan mual dan menghangatkan tubuh.
                        </p>
                        <a href="https://fahum.umsu.ac.id/blog/10-manfaat-jahe-bagi-kesehatan-tubuh/" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lihat-lainnya">
        <a href="artikel.php" class="btn btn-primary">Lihat Selengkapnya</a>
    </div>
</section>

<!-- Tombol "Lihat Selengkapnya" di pojok kanan bawah -->


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

<?php 
$connect = mysqli_connect("localhost", "root", "", "obat");

$tujuan = '../index.php';

// Contoh: Nama akun yang sedang login disimpan di session
$nama_pengguna = isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Kesehatan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya Navbar */
        .nav-profile {
            display: flex;
            align-items: center;
        }

        .nav-profile .logout-btn {
            display: flex;
            align-items: center;
            background-color: #ffffff;
            color: #333333;
            border-radius: 20px;
            padding: 5px 12px;
            text-decoration: none;
            font-size: 0.9rem;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .nav-profile .logout-btn:hover {
            background-color: #f8f9fa;
            color: #007bff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .nav-profile .logout-btn img {
            width: 18px;
            height: 18px;
            margin-left: 8px;
        }

        .nav-profile .user-name {
            margin-right: 10px;
            color: #ffffff;
            font-weight: bold;
        }
        .nav-link:hover{
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">Kesehatan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rek_obat.php">Pencarian</a>
                   </li>
                </ul>

                <!-- Nama Akun dan Logout -->
                <div class="nav-profile">
                    <div class="d-flex justify-content-center align-items-center gap-1">
                        <i class="fa-solid fa-circle-user me-1 fs-4 text-light"></i>
                        <span class="user-name"><?= htmlspecialchars($nama_pengguna) ?></span>
                    </div>
                    <a href="logout.php" class="logout-btn">
                        Logout
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828427.png" alt="Logout Icon">
                    </a>
                </div>
            </div>
        </div>
    </nav>




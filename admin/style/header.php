<?php
    $connect = mysqli_connect("localhost", "root", "", "obat");
    if (!isset($username)) {
        $username = "Admin"; 
    }
    session_start();

    $nama_pengguna = isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/style/style.css">
    
</head>
<body>
    <header>
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Admin Dashboard</h4>
        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle d-flex align-items-center text-dark text-decoration-none" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle me-2"></i> <?= $nama_pengguna; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

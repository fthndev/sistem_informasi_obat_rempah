<!-- <?php
session_start();
$username = "admin1"; // Ganti dengan nama pengguna Anda
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d-flex">
        <?php include '../admin/style/sidebar.php'; ?>
        <div class="flex-grow-1">
            <?php include '../admin/style/header.php'; ?>
            <div class="container mt-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Artikel</h5>
                                <a href="data_user.php" class="btn btn-primary">Info lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Rempah</h5>
                                <a href="ekstrakulikuler.php" class="btn btn-primary">Info lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Olahan</h5>
                                <a href="ekstrakulikuler.php" class="btn btn-primary">Info lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    include '../style/foot.php';
?>
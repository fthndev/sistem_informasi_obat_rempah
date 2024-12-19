<?php
    include '../admin/style/header.php';
    include '../admin/style/sidebar.php';
    session_start();

    if(!isset($_SESSION['user'])){
        echo "<script>
            alert('anda harus login terlebih dahulu!');
            window.location.href='login.php';
        </script>";
    }else{
        if($_SESSION['level'] != "admin"){
            echo "<script>
            alert('anda harus login sebagai admin!');
            window.location.href='../login.php';
            </script>";
        session_start();
        session_unset();
        session_destroy();
        }
    }
?>
<div class="content">
    <div class="container mt-4">
        <h3 class="mb-4">Admin Dashboard</h3>
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
                        <a href="data_user.php" class="btn btn-primary">Info lebih lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">User</h5>
                        <a href="manage_user.php" class="btn btn-primary">Info lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

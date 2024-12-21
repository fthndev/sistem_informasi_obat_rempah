<?php
include '../admin/style/header.php';
include '../admin/style/sidebar.php';

$connect = mysqli_connect("localhost", "root", "", "obat");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if(!isset($_SESSION['user'])){
    echo "<script>
        lert('anda harus login!');
        window.location.href='../login.php';
    </script>";
}else{
    if($_SESSION['level'] != "admin"){
        echo "<script>
        alert('anda harus login sebagai admin!');
        window.location.href='../login.php';
        </script>";
    session_unset();
    session_destroy();
    }
}

$id_rempah = isset($_GET['ide']) ? $_GET['ide'] : '';

if ($id_rempah) {
    $query = $connect->query("SELECT * FROM khasiat, olahan WHERE khasiat.id_rempah = $id_rempah");
    $row = $query->fetch_assoc();
} else {

    die("Invalid ID Rempah");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_khasiat = $_POST['id_khasiat'];
    $nama_khasiat = $_POST['nama_khasiat'];
    $nama_keluhan = $_POST['nama_keluhan'];
    $nama_olahan = $_POST['nama_olahan'];
    $resep = $_POST['resep'];
    $id_rempah = $_POST['id_rempah'];
    

    $query = "UPDATE khasiat SET id_khasiat = '$id_khasiat', nama_khasiat = '$nama_khasiat', nama_keluhan = '$nama_keluhan', id_rempah = '$id_rempah' WHERE id_rempah = $id_rempah";
    $query_olahan = "UPDATE olahan SET nama_olahan = '$nama_olahan', resep = '$resep', id_rempah = '$id_rempah' WHERE id_rempah = $id_rempah";

    if ($connect->query($query) === TRUE && $connect->query($query_olahan) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location.href = 'rempah.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . $connect->error;
        echo "Error: " . $query_olahan . "<br>" . $connect->error;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rempah</title>
    <style>
        .container {
            margin-top: 90px;
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Edit Khasiat</h1>

        <form action="" method="POST">
            <input type="hidden" name="id_khasiat" value="<?php echo $row['id_khasiat']; ?>">

            <div class="form-group">
                <label for="nama_rempah">Nama Khasiat:</label>
                <input type="text" class="form-control" id="nama_khasiat" name="nama_khasiat" value="<?php echo $row['nama_khasiat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_rempah">Keluhan:</label>
                <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" value="<?php echo $row['nama_keluhan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_rempah">Nama Olahan</label>
                <input type="text" class="form-control" id="nama_olahan" name="nama_olahan" value="<?php echo $row['nama_olahan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_rempah">Resep</label>
                <input type="text" class="form-control" id="resep" name="resep" value="<?php echo $row['resep']; ?>" required>
            </div>
            <div class="form-group">
                <label for="id_jenis">ID Jenis:</label>
                <input type="text" class="form-control" id="id_rempah" name="id_rempah" value="<?php echo $row['id_rempah']; ?>" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
                <a href="rempah.php" class="btn btn-secondary btn-sm">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>

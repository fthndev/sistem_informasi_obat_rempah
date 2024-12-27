<?php
include '../admin/style/header.php';
include '../admin/style/sidebar.php';

$connect = mysqli_connect("localhost", "root", "", "obat");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if(!isset($_SESSION['user'])){
    echo "<script>
    alert('anda harus login!');
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

$id_rempah = isset($_GET['id']) ? $_GET['id'] : '';

if ($id_rempah) {
    $query = $connect->query("SELECT * FROM rempah WHERE id_rempah = $id_rempah");
    $row = $query->fetch_assoc();
} else {

    die("Invalid ID Rempah");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_rempah = $_POST['id_rempah'];
    $nama_rempah = $_POST['nama_rempah'];
    $nama_ilmiah = $_POST['nama_ilmiah'];
    $id_jenis = $_POST['id_jenis'];


    $query = "UPDATE rempah SET nama_rempah = '$nama_rempah', nama_ilmiah = '$nama_ilmiah', id_jenis = '$id_jenis' WHERE id_rempah = $id_rempah";

    if ($connect->query($query) === TRUE) {
        echo "<script>alert('Update Berhasil!'); window.location.href = 'rempah.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . $connect->error;
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
        <h1 class="text-center">Edit Rempah</h1>

        <form action="" method="POST">
            <input type="hidden" name="id_rempah" value="<?php echo $row['id_rempah']; ?>">

            <div class="form-group">
                <label for="nama_rempah">Nama Rempah:</label>
                <input type="text" class="form-control" id="nama_rempah" name="nama_rempah" value="<?php echo $row['nama_rempah']; ?>" required>
            </div>

            <div class="form-group">
                <label for="nama_ilmiah">Nama Ilmiah:</label>
                <input type="text" class="form-control" id="nama_ilmiah" name="nama_ilmiah" value="<?php echo $row['nama_ilmiah']; ?>" required>
            </div>

            <div class="form-group">
                <label for="id_jenis">ID Jenis:</label>
                <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $row['id_jenis']; ?>" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
                <a href="rempah.php" class="btn btn-secondary btn-sm">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>

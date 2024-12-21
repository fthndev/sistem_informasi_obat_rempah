<?php
include "./style/header.php";
include "./style/sidebar.php";

$query = mysqli_query($connect,"SELECT * FROM artikel");
$rows = mysqli_num_rows($query);
$query = "SELECT * FROM artikel, rempah WHERE artikel.id_rempah = rempah.id_rempah LIMIT $rows";
$result = mysqli_query($connect, $query);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET["nama"])) {
    $id = $_GET["nama"];
    $query = "DELETE FROM artikel WHERE id_artikel = $id";
    $result = mysqli_query($connect, $query);
    echo "<script>alert('Data Berhasil Dihapus');window.location.href='kelolahArtikel.php'</script>";
}
?>
<style>
<<<<<<< HEAD

=======
 
>>>>>>> f576d77d9e1484275f24b89aea38b2185de573b2
.main-content {
    margin-left: 260px; 
    margin-top: 70px;  
    padding: 20px;
    overflow-x: auto; 
    background-color: #f8f9fa; 
    min-height: 100vh; 
}


.table img {
    display: block;
    margin: 0 auto;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.table td, .table th {
    vertical-align: middle;
}


.btn {
    margin: 2px;
}

<<<<<<< HEAD
=======

>>>>>>> f576d77d9e1484275f24b89aea38b2185de573b2
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    background-color: #343a40;
    color: white;
    padding-top: 20px;
    z-index: 1000;
}

.sidebar a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
}

.sidebar a:hover {
    background-color: #495057;
}


.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    background-color: #343a40;
    color: white;
    line-height: 70px;
    text-align: center;
    z-index: 1000;
}


@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
        margin-top: 120px; 
    }
    .sidebar {
        position: relative;
        width: 100%;
    }
}

</style>
<div class="main-content">
    <a href="editArtikel.php" class="btn btn-primary mt-3">Tambah Artikel</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id Artikel</th>
                    <th scope="col">Nama Rempah</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Link Artikel</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row): ?>
                    <tr>
                        <td><?=$row["id_artikel"]?></td>
                        <td><?=$row["nama_rempah"]?></td>
                        <td><?=$row["judul"]?></td>
                        <td><?=$row["deskripsi"]?></td>
                        <td><a href="<?=$row["link"]?>" target="_blank" class="btn btn-link">Buka</a></td>
                        <td>
                            <img src="<?=$row["gambar"]?>" alt="Gambar Artikel" style="width: 100px; height: auto;" class="img-thumbnail">
                        </td>
                        <td>
                            <a href="editArtikel.php?id=<?=$row["id_artikel"]?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="kelolahArtikel.php?nama=<?=$row["id_artikel"]?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

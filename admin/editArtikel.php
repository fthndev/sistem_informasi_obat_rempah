<?php
include "./style/header.php";
include "./style/sidebar.php";
$conn = mysqli_connect("localhost", "root", "", "obat");

echo '<div class="main-content">'; 
?>
<head>
    <style>

.main-content {
    margin-left: 260px; 
    margin-top: 70px;  
    padding: 20px;
    background-color: #f8f9fa; 
    min-height: 100vh;
}


.form-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.form-container label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

.form-container input[type="text"],
.form-container textarea,
.form-container input[list] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-container input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
}

.form-container input[type="submit"]:hover {
    background-color: #0056b3;
}
h1{
    text-align: center;
}
/* Responsif */
@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
        margin-top: 100px;
    }
}

    </style>
</head>
<?php
if (isset($_GET["id"])) {
    $id_artikel = $_GET["id"];
    $query = "SELECT * FROM artikel, rempah WHERE id_artikel = $id_artikel AND artikel.id_rempah = rempah.id_rempah";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);

    $judul = $result["judul"];
    $deskripsi = $result["deskripsi"];
    $link = $result["link"];
    $gambar = $result["gambar"];
    $nama_rempah = $result["id_rempah"];

    echo "
    <h1>Edit Artikel</h1><form method='POST' class='form-container'>
    <label>Id Artikel:</label>
    <input type='text' name='id_artikel' value='$id_artikel' readonly><br>
    <label>Judul:</label>
    <textarea name='judul'>$judul</textarea><br>
    <label>Deskripsi:</label>
    <textarea name='deskripsi'>$deskripsi</textarea><br>
    <label>Link:</label>
    <textarea name='link'>$link</textarea><br>
    <label>Gambar:</label>
    <textarea name='gambar'>$gambar</textarea><br>
    <label>Nama Rempah:</label>
    <input list='nama_rempah' name='nama_rempah' value='$nama_rempah'>'<br>
    <datalist id='nama_rempah'>";
    
    $query = "SELECT * FROM rempah";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    foreach ($result as $row) {
        echo "<option value='" . $row["id_rempah"] . "'>" . $row["nama_rempah"] . "</option>";
    }

    echo "</datalist>
    <input type='submit' value='Simpan' name='simpan' class='btn btn-primary'>
    <a href='kelolahArtikel.php' class='btn btn-primary'>Kembali</a>
    </form>";

    if (isset($_POST["simpan"])) {
        $id_artikel = $_POST["id_artikel"];
        $judul = $_POST["judul"];
        $deskripsi = $_POST["deskripsi"];
        $link = $_POST["link"];
        $gambar = $_POST["gambar"];
        $nama_rempah = $_POST["nama_rempah"];
        $query = "UPDATE artikel SET judul='$judul', deskripsi='$deskripsi', link='$link', gambar='$gambar', id_rempah='$nama_rempah' WHERE id_artikel=$id_artikel";
        $result = mysqli_query($conn, $query);
        echo "<script>alert('Data Berhasil Diubah');window.location.href='kelolahArtikel.php'</script>";
    }
} else {
    $query1 = "SELECT MAX(id_artikel) AS last_id FROM artikel";
    $result1 = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result1);
    $last = $row['last_id'] ? $row['last_id'] + 1 : 1;
    
    echo '
    <h1>Tambah Artikel</h1><form method="post" class="form-container">
    <label>Id Artikel:</label>
    <input type="text" name="id_artikel" value="' . $last . '" readonly><br>
    <label>Judul:</label>
    <textarea name="judul"></textarea><br>
    <label>Deskripsi:</label>
    <textarea name="deskripsi"></textarea><br>
    <label>Link:</label>
    <textarea name="link"></textarea><br>
    <label>Gambar:</label>
    <textarea name="gambar"></textarea><br>
    <label>Nama Rempah:</label>
    <input list="nama_rempah" name="nama_rempah"><br>
    <datalist id="nama_rempah">';

    $query = "SELECT * FROM rempah";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($result as $row) {
        echo "<option value='" . $row["id_rempah"] . "'>" . $row["nama_rempah"] . "</option>";
    }

    echo "</datalist>
    <input type='submit' value='Simpan' name='simpan'>
    <a href='kelolahArtikel.php' class='btn btn-primary'>Kembali</a>
    </form>";

    if (isset($_POST["simpan"])) {
        $id_artikel = $_POST["id_artikel"];
        $judul = $_POST["judul"];
        $deskripsi = $_POST["deskripsi"];
        $link = $_POST["link"];
        $gambar = $_POST["gambar"];
        $nama_rempah = $_POST["nama_rempah"];
        $query = "INSERT INTO artikel VALUES('$id_artikel', '$judul', '$deskripsi', '$link', '$gambar', '$nama_rempah')";
        $result = mysqli_query($conn, $query);
        echo "<script>alert('Data Berhasil Disimpan');window.location.href='kelolahArtikel.php'</script>";
    }
}
echo '</div>';
?>

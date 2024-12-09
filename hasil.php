<?php 
require './style/header.php';
$tujuan='./index.php';
$_SESSION['tujuan']=$tujuan;

?>
<section id="pencarian" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Pencarian Obat dan Rempah</h2>
            <form action="hasil.php" method="POST">
                <div class="mb-5">
                    <label for="penyakit" class="form-label">Pilih Penyakit:</label>
                    <input type="text" name="penyakit" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
</section>
<div class="container my-5">
        <h2 class="text-center mb-4">Daftar Obat</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Nama Obat</th>
                    <th class="text-center">Nama Rempah</th>
                    <th class="text-center">Penggunaan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['penyakit'])) {
                $sudah = $_POST['penyakit'];
                $sql = "SELECT * FROM obat WHERE penyakit LIKE '%$sudah%'";
                $query = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($query)) {

                    echo "
                        <tr>
                            <td>{$row['nama']}</td>
                            <td>{$row['penyakit']}</td>
                            <td>{$row['penggunaan']}</td>
                        </tr>
                    
                        ";
                }
                }
                ?>
            </tbody>
        </table>
    </div>
<?php require './style/foot.php' ?>
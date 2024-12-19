<?php 
$conn=mysqli_connect("localhost","root","","obat");
$query="SELECT * FROM artikel,rempah WHERE artikel.id_rempah=rempah.id_rempah";
$result=mysqli_query($conn,$query);
$result=mysqli_fetch_all($result,MYSQLI_ASSOC);
if (isset($_GET["nama"])) {
    $id=$_GET["nama"];
    $query="DELETE FROM artikel WHERE id_artikel=$id";
    $result=mysqli_query($conn,$query);
    echo "<script>alert('Data Berhasil Dihapus');window.location.href='kelolahArtikel.php'</script>";
}
?>
<table border="1">
    <tr>
        <th>Id Artikel</th>
        <th>Nama Rempah</th>
        <th>Judul Artikel</th>
        <th>Deskripsi</th>
        <th>Link Artikel</th>
        <th>Link Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($result as $row): ?>
        <tr>
            <td><?=$row["id_artikel"]?></td>
            <td><?=$row["nama_rempah"]?></td>
            <td><?=$row["judul"]?></td>
            <td><?=$row["deskripsi"]?></td>
            <td><?=$row["link"]?></td>
            <td><?=$row["gambar"]?></td>
            <td>
                <a href="editArtikel.php?id=<?=$row["id_artikel"]?>"><button>Edit</button></a>
                <a href="kelolahArtikel.php?nama=<?=$row["id_artikel"]?>"><button>Hapus</button></a>
            </td>
        </tr>
    <?php endforeach ?>
    <a href="editArtikel.php"><button>Tambah Artikel</button"></a>
</table>



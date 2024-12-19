<?php 
$conn=mysqli_connect("localhost","root","","obat");
if(isset($_GET["id"])){
    $id_artikel=$_GET["id"];
    $query="SELECT * FROM artikel,rempah WHERE id_artikel=$id_artikel AND artikel.id_rempah=rempah.id_rempah";
    $result=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($result);
    $judul=$result["judul"];
    $deskripsi=$result["deskripsi"];
    $link=$result["link"];
    $gambar=$result["gambar"];
    $nama_rempah=$result["nama_rempah"];
    echo "<form method='POST'>
    Id Artikel:<input type='text' name='id_artikel' value='$id_artikel' readonly><br>
    Judul:<textarea name='judul'>$judul</textarea><br>
    Deskripsi:<textarea name='deskripsi'>$deskripsi</textarea><br>
    Link:<textarea name='link'>$link</textarea><br>
    Gambar:<textarea name='gambar'>$gambar</textarea><br>
    Nama Rempah:<input list='nama_rempah' name='nama_rempah' value='$nama_rempah'><br>
    <datalist id='nama_rempah'>";
    $query="SELECT * FROM rempah";
    $result=mysqli_query($conn,$query);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach ($result as $row) {
        echo "<option value='".$row["id_rempah"]."'>'".$row["nama_rempah"]."'</option>";
    }
    echo "</datalist>
    <input type='submit' value='Simpan' name='simpan'>
    </form>";
    if (isset($_POST["simpan"])) {
        $id_artikel=$_POST["id_artikel"];
        $judul=$_POST["judul"];
        $deskripsi=$_POST["deskripsi"];
        $link=$_POST["link"];
        $gambar=$_POST["gambar"];
        $nama_rempah=$_POST["nama_rempah"];
        $query="UPDATE artikel SET judul='$judul',deskripsi='$deskripsi',link='$link',gambar='$gambar',id_rempah='$nama_rempah' WHERE id_artikel=$id_artikel";
        $result=mysqli_query($conn,$query);
        echo "<script>alert('Data Berhasil Diubah');window.location.href='kelolahArtikel.php'</script>";
    }
}else{
    $query1="SELECT id_artikel FROM artikel";
    $result1=mysqli_query($conn,$query1);
    $result1=mysqli_fetch_assoc($result1);
    $last=$result1["id_artikel"]+1;
    echo'<form method="post">
    id_artikel:<input type="text" name="id_artikel" value="'.$last.'" readonly><br>
    judul:<textarea name="judul"></textarea><br>
    deskripsi:<input type="text" name="deskripsi"><br>
    link:<textarea name="link"></textarea><br>
    gambar:<textarea name="gambar"></textarea><br>
    Nama Rempah:<input list="nama_rempah" name="nama_rempah"><br>
    <datalist id="nama_rempah">';
    $query="SELECT * FROM rempah";
    $result=mysqli_query($conn,$query);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach ($result as $row) {
        echo "<option value='".$row["id_rempah"]."'>'".$row["nama_rempah"]."</option>";
    }
    echo "</datalist>
    <input type='submit' value='Simpan' name='simpan'>
    </form>";
    if (isset($_POST["simpan"])) {
        $id_artikel=$_POST["id_artikel"];
        $judul=$_POST["judul"];
        $deskripsi=$_POST["deskripsi"];
        $link=$_POST["link"];
        $gambar=$_POST["gambar"];
        $nama_rempah=$_POST["nama_rempah"];
        $query="INSERT INTO artikel VALUES('$id_artikel','$judul','$deskripsi','$link','$gambar','$nama_rempah')";
        $result=mysqli_query($conn,$query);
        echo "<script>alert('Data Berhasil Disimpan');window.location.href='kelolahArtikel.php'</script>";
    }
}
?>
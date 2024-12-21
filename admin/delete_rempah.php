<?php
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

if (!empty($id_rempah)) {
    $stmt = $connect->prepare("DELETE FROM rempah WHERE id_rempah = ?");
    $stmt->bind_param("i", $id_rempah);  
    $query_artikel = "SELECT * FROM artikel WHERE id_rempah =  '$id_rempah'";
    $result = mysqli_query($connect, $query_artikel);
    if(mysqli_num_rows($result) > 0){
        echo "Error: " . $stmt->error;
        echo "<script>
            alert('rempah ini telah digunakan pada tabel lain!');
            window.location.href = 'rempah.php';
        </script>" ; 
        exit();
    }else{
        $stmt->execute();
        header("Location: rempah.php"); 
        exit();
    }
    $stmt->close();
} else {
    header("Location: rempah.php");
    exit();
}
?>

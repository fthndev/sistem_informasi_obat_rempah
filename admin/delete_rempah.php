<?php
$connect = mysqli_connect("localhost", "root", "", "obat");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
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

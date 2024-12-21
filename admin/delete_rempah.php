<?php
$connect = mysqli_connect("localhost", "root", "", "obat");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Get the id_rempah from the URL query string
$id_rempah = isset($_GET['id']) ? $_GET['id'] : '';

if (!empty($id_rempah)) {
    // Prepare and bind the DELETE statement to prevent SQL injection
    $stmt = $connect->prepare("DELETE FROM rempah WHERE id_rempah = ?");
    $stmt->bind_param("i", $id_rempah);  // 'i' indicates that the parameter is an integer
    $query_artikel = "SELECT * FROM artikel WHERE id_rempah =  '$id_rempah'";
    $result = mysqli_query($connect, $query_artikel);
    if(mysqli_num_rows($result) > 0){
        echo "Error: " . $stmt->error;
        echo "<script>
            alert('rempah ini telah digunakan pada tabel lain!');
            window.location.href = 'rempah.php';
        </script>" ; // You can redirect even on error if you prefer
        exit();
    }else{
        $stmt->execute();
        header("Location: rempah.php");  // You can redirect even on error if you prefer
        exit();
    }

    $stmt->close();
} else {
    // If id_rempah is empty, redirect to rempah.php
    header("Location: rempah.php");
    exit();
}
?>

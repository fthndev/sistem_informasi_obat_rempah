<?php 
    session_start();
    session_unset();
    session_destroy();

    echo "<script>
    alert('anda telah logout!');
    window.location.href='login.php';
    </script>";
?>
?>
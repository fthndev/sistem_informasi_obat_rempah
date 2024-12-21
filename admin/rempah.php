<?php
    include '../admin/style/header.php';
    include '../admin/style/sidebar.php';
    
    $connect = mysqli_connect("localhost", "root", "", "obat");
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rempah Database</title>
    <style>
        .container{
            margin-top: 90px;
        }
    </style>
</head>
<body>
    
    <div class="container" style="width: 60%">
        <h1 class="text-center">Manage Rempah Database</h1>

        <div class="table-responsive">
            <table class="table table-bordered mt-3" id="rempahTable">
                <thead>
                    <tr>
                        <th>ID Rempah</th>
                        <th>Nama Rempah</th>
                        <th>Nama Ilmiah</th>
                        <th>ID Jenis</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = $connect->query("SELECT * FROM rempah");
                        while ($row = $query->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id_rempah']}</td>
                                <td>{$row['nama_rempah']}</td>
                                <td>{$row['nama_ilmiah']}</td>
                                <td>{$row['id_jenis']}</td>
                                <td>
                                    <button class='btn btn-warning btn-sm' onclick=\"window.location.href='edit_rempah.php?id={$row['id_rempah']}'\">Edit</button>
                                    <button class='btn btn-danger btn-sm' onclick='deleterempah({$row['id_rempah']})'>Delete</button>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleterempah(number){
            var confirm_ms = confirm("apakah anda yakin ingin menghapus rempah ini?");
            if(confirm_ms == true){
                window.location.href = 'delete_rempah.php?id=' + number;
            } 
        }
    </script>
</body>
</html>

    

    
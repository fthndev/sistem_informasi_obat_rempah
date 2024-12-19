<?php 
include './style/header.php'; // Menghubungkan header dan koneksi database

// Hapus user jika ada permintaan
if (isset($_GET['delete'])) {
    $id_user = $_GET['delete'];
    mysqli_query($connect, "DELETE FROM user WHERE id_user = $id_user");
    header("Location: manage_user.php");
}

// Ambil data pengguna
$result = mysqli_query($connect, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kelola User</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Kelola User</h1>
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['id_user'] ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td><?= htmlspecialchars($row['password']) ?></td>
                    <td><?= $row['level'] ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $row['id_user'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?delete=<?= $row['id_user'] ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus pengguna ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php require './style/foot.php' ?>
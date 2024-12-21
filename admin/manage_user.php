<?php 
include '../admin/style/header.php';
include '../admin/style/sidebar.php';

if (isset($_GET['delete'])) {
    $id_user = intval($_GET['delete']); 
    mysqli_query($connect, "DELETE FROM user WHERE id_user = $id_user");
    header("Location: manage_user.php");
}

$result = mysqli_query($connect, "SELECT id_user, username, level FROM user");
?>

<body class="bg-light d-flex">

    <div class="sidebar bg-dark text-white">
        <?php include '../admin/style/sidebar.php'; ?>
    </div>


    <div class="content w-100">
        <div class="container mt-5">
            <h1 class="mb-4">Kelola User</h1>
            <table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id_user']) ?></td>
                        <td><?= htmlspecialchars($row['username']) ?></td>
                        <td><?= htmlspecialchars($row['level']) ?></td>
                        <td>
                            <a href="?delete=<?= $row['id_user'] ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus pengguna ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

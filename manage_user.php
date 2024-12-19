<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "obat_tradisional");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Hapus user jika ada permintaan
if (isset($_GET['delete'])) {
    $id_user = $_GET['delete'];
    $conn->query("DELETE FROM user WHERE id_user = $id_user");
    header("Location: kelola_user.php");
}

// Ambil data pengguna
$result = $conn->query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Kelola User</h1>

        <!-- Tabel Data User -->
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Password</th>
                    <th class="px-4 py-2">Level</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td class="border px-4 py-2"><?= $row['id_user'] ?></td>
                    <td class="border px-4 py-2"><?= $row['username'] ?></td>
                    <td class="border px-4 py-2"><?= $row['password'] ?></td>
                    <td class="border px-4 py-2"><?= $row['level'] ?></td>
                    <td class="border px-4 py-2">
                        <a href="edit_user.php?id=<?= $row['id_user'] ?>"
                            class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <a href="?delete=<?= $row['id_user'] ?>" class="bg-red-500 text-white px-2 py-1 rounded"
                            onclick="return confirm('Hapus pengguna ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
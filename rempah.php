<?php
    include 'style/header.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Manage Rempah Database</h1>

        <!-- Table to display data -->
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
                                    <button class='btn btn-warning btn-sm' onclick='editRempah({$row['id_rempah']})'>Edit</button>
                                    <button class='btn btn-danger btn-sm' onclick='deleteRempah({$row['id_rempah']})'>Delete</button>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Button to add new row -->
        <button class="btn btn-primary" onclick="showAddModal()">Add New Rempah</button>

        <!-- Modal for Add/Edit -->
        <div class="modal" tabindex="-1" id="editModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Rempah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="rempahForm">
                            <input type="hidden" id="id_rempah">
                            <div class="mb-3">
                                <label for="nama_rempah" class="form-label">Nama Rempah</label>
                                <input type="text" class="form-control" id="nama_rempah" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ilmiah" class="form-label">Nama Ilmiah</label>
                                <input type="text" class="form-control" id="nama_ilmiah" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_jenis" class="form-label">ID Jenis</label>
                                <input type="number" class="form-control" id="id_jenis">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="saveRempah()">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const apiUrl = 'http://localhost:3000/rempah'; // Adjust this to match your API endpoint

        function loadRempah() {
            axios.get(apiUrl)
                .then(response => {
                    const tbody = document.querySelector('#rempahTable tbody');
                    tbody.innerHTML = '';
                    response.data.forEach(item => {
                        tbody.innerHTML += `
                            <tr>
                                <td>${item.id_rempah}</td>
                                <td>${item.nama_rempah}</td>
                                <td>${item.nama_ilmiah}</td>
                                <td>${item.id_jenis ?? ''}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editRempah(${item.id_rempah})">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteRempah(${item.id_rempah})">Delete</button>
                                </td>
                            </tr>`;
                    });
                });
        }

        function showAddModal() {
            document.getElementById('rempahForm').reset();
            document.getElementById('id_rempah').value = '';
            new bootstrap.Modal(document.getElementById('editModal')).show();
        }

        function editRempah(id) {
            axios.get(`${apiUrl}/${id}`)
                .then(response => {
                    const { id_rempah, nama_rempah, nama_ilmiah, id_jenis } = response.data;
                    document.getElementById('id_rempah').value = id_rempah;
                    document.getElementById('nama_rempah').value = nama_rempah;
                    document.getElementById('nama_ilmiah').value = nama_ilmiah;
                    document.getElementById('id_jenis').value = id_jenis ?? '';
                    new bootstrap.Modal(document.getElementById('editModal')).show();
                });
        }

        function saveRempah() {
            const id_rempah = document.getElementById('id_rempah').value;
            const nama_rempah = document.getElementById('nama_rempah').value;
            const nama_ilmiah = document.getElementById('nama_ilmiah').value;
            const id_jenis = document.getElementById('id_jenis').value || null;

            const data = { nama_rempah, nama_ilmiah, id_jenis };

            if (id_rempah) {
                // Update existing data
                axios.put(`${apiUrl}/${id_rempah}`, data)
                    .then(() => {
                        loadRempah();
                        bootstrap.Modal.getInstance(document.getElementById('editModal')).hide();
                    });
            } else {
                // Add new data
                axios.post(apiUrl, data)
                    .then(() => {
                        loadRempah();
                        bootstrap.Modal.getInstance(document.getElementById('editModal')).hide();
                    });
            }
        }

        function deleteRempah(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                axios.delete(`${apiUrl}/${id}`)
                    .then(() => loadRempah());
            }
        }

        // Initial data load
        loadRempah();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    include 'style/foot.php';
?>

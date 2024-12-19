<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="text-center">Admin Dashboard</h2>
        <a href="#"><i class="fas fa-home"></i> Artikel</a>
        <a href="#"><i class="fas fa-user"></i> Rempah</a>
        <a href="#"><i class="fas fa-cog"></i> Olahan</a>
        <a href="#"><i class="fas fa-chart-bar"></i> Analytics</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="content">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is your main panel. Use the navigation menu to access various sections.</p>
        <div class="row">
            <div class="col-md-4">
                <a href="../artikel.php" class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Artikel</h5>
                        <p class="card-text">1,230</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="revenue.html" class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Rempah</h5>
                        <p class="card-text">$45,000</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tasks.html" class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Olahan</h5>
                        <p class="card-text">12</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

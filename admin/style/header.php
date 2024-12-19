<div class="header d-flex justify-content-between align-items-center p-3 bg-light shadow-sm">
    <h5 class="mb-0">Admin Dashboard</h5>
    <div class="d-flex align-items-center">
        <div class="position-relative me-3">
            <button class="btn btn-light position-relative">
                <i class="bi bi-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    2
                </span>
            </button>
        </div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                <img src="profile.jpg" alt="Profile" class="rounded-circle me-2" width="30" height="30">
                <span><?php echo $username; ?></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

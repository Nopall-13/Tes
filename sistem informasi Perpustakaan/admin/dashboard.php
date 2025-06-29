<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .menu-box {
            border-radius: 10px;
            padding: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .menu-box:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4">Selamat datang, <?= $_SESSION['nama_lengkap']; ?>!</h3>
    <div class="row g-3">

        <div class="col-md-4">
            <a href="buku/" class="text-decoration-none text-dark">
                <div class="menu-box text-center">
                    <h5>📚 Data Buku</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="anggota/" class="text-decoration-none text-dark">
                <div class="menu-box text-center">
                    <h5>👥 Data Anggota</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="peminjaman/" class="text-decoration-none text-dark">
                <div class="menu-box text-center">
                    <h5>🔄 Peminjaman</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="pengembalian/" class="text-decoration-none text-dark">
                <div class="menu-box text-center">
                    <h5>🔁 Pengembalian</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="denda/" class="text-decoration-none text-dark">
                <div class="menu-box text-center">
                    <h5>💸 Denda</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="../logout.php" class="text-decoration-none text-danger">
                <div class="menu-box text-center">
                    <h5>🚪 Logout</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="tools/ganti_password.php" class="text-decoration-none text-dark">
        <div class="menu-box text-center">
            <h5>🔐 Ganti Password</h5>
        </div>
    </a>
</div>


    </div>
</div>

</body>
</html>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Selamat datang, <?= $_SESSION['username']; ?> 👋</h3>
    <a href="admin/dashboard.php" class="btn btn-primary mt-3">Masuk ke Dashboard</a>
    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>
</body>
</html>

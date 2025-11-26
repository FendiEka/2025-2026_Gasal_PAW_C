<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<?php include "includes/navbar.php"; ?>

<div class="container mt-5">
  <div class="card shadow p-4">
    <h2 class="fw-bold">Selamat Datang, <?= $_SESSION['username']; ?></h2>
    <hr>
    <h5>Level Anda : <span class="badge bg-primary"><?= $_SESSION['level']; ?></span></h5>
    <p class="mt-3">Silakan gunakan menu navigasi di atas untuk memulai.</p>
  </div>
</div>

</body>
</html>

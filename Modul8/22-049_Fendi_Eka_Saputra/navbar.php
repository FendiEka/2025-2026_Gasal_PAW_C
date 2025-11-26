<?php if($_SESSION['level'] == 1) { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold">SISTEM PENJUALAN</a>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Data Master</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
      <li class="nav-item"><span class="nav-link text-warning">👤 <?= $_SESSION['username']; ?></span></li>
      <li class="nav-item"><a class="btn btn-sm btn-danger ms-2" href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<?php } else if($_SESSION['level'] == 2) { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold">SISTEM PENJUALAN</a>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
      <li class="nav-item"><span class="nav-link text-warning">👤 <?= $_SESSION['username']; ?></span></li>
      <li class="nav-item"><a class="btn btn-sm btn-danger ms-2" href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<?php } ?>

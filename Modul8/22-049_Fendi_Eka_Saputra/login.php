<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header text-center">
          <h4>Login</h4>
        </div>
        <div class="card-body">

          <?php if(isset($_GET['pesan'])) { ?>
            <div class="alert alert-danger"><?= $_GET['pesan']; ?></div>
          <?php } ?>

          <form action="proses_login.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form-control mb-3" required>

            <label>Password</label>
            <input type="password" name="password" class="form-control mb-3" required>

            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

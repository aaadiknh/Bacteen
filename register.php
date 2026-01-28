<?php 
include 'db.php';
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Username sudah digunakan!";
    } else {
        $query = mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
        if ($query) {
            $success = "Registrasi berhasil! Silakan login.";
        } else {
            $error = "Registrasi gagal!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="css/register.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
  <div class="card-container position-relative bg-white shadow rounded-4 row w-100 p-0" style="max-width: 1000px;">

    <!-- Gambar -->
    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-4">
      <img src="images/gambar register.png" class="img-fluid" alt="Register Image">
    </div>

    <!-- Form -->
    <div class="col-12 col-md-6 p-5">
      <!-- Tombol Close -->
        <button onclick="window.location.href='index.php';" class="exit-btn position-absolute border-0 bg-transparent">
          <img src="images/exit.png" alt="Close" width="30">
        </button>

      <h2 class="fw-bold">Registrasi New Member</h2>
      <p class="text-muted mb-4">Hallo! Welcome to LiterateSpace, I hope you enjoy it!</p>

      <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
      <?php endif; ?>
      <?php if ($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
      <?php endif; ?>

      <form method="post">
        <div class="mb-3">
          <input type="text" name="username" placeholder="Enter username" class="form-control" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" placeholder="Enter email" class="form-control" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <button type="submit" class="btn-register w-100 border-0">SIGN UP</button>
      </form>

      <div class="text-center mt-3 signup-text">
        Sudah punya akun? <a href="login.php">Login Disini</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

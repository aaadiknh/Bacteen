<?php
session_start();
include 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Cek user
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifikasi password (gunakan password_verify jika password di-hash)
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($user['password'] === $password) { // Jika belum hash
        // if (password_verify($password, $user['password'])) { // Jika sudah hash
            $_SESSION['user'] = $username;
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: index.php");
            exit();
        }
    }
    $error = "Login gagal! Username atau password salah.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
  <div class="card-container bg-white shadow rounded-4 row w-100 p-0 position-relative" style="max-width: 900px;">

    <!-- Gambar Sisi Kiri -->
    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-4">
      <img src="images/gambar login.png" class="img-fluid" alt="Login Image">
    </div>

    <!-- Form Sisi Kanan -->
    <div class="col-12 col-md-6 p-5">
      <!-- Tombol Close di pojok kanan atas -->
      <button onclick="window.location.href='index.php';" class="exit-btn">
        <img src="images/exit.png" alt="Close">
      </button>

      <h2 class="fw-bold">Hello Again!</h2>
      <p class="text-muted mb-4">Welcome back, you've been missed!</p>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
      <?php endif; ?>

      <form method="post">
        <div class="mb-3">
          <input type="text" name="username" placeholder="Enter username" class="form-control" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <button type="submit" class="btn-login w-100 border-0">LOGIN</button>
      </form>

      <div class="text-center mt-3 signup-text">
        Belum punya akun? <a href="register.php">Daftar Disini</a>
      </div>
    </div>

  </div>
</div>

</body>
</html>

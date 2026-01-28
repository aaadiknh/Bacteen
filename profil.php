<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['id'];
$quiz_result = mysqli_query($conn, "SELECT score FROM quiz_results WHERE user_id = $user_id");
$score = mysqli_fetch_assoc($quiz_result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    .profile-container {
      max-width: 400px;
      margin: 60px auto;
      text-align: center;
    }

    .profile-card {
      width: 80%;
      margin: 0 auto;
      background-color: #7344a9;
      border-radius: 20px;
      padding: 80px 20px 30px;
      position: relative;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #fff;
      position: absolute;
      top: -60px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #fff;
    }

    .username {
      font-weight: 700;
      font-size: 18px;
      color: #fff;
      background-color: #a58ad2;
      display: inline-block;
      padding: 4px 12px;
      border-radius: 6px;
      margin-top: 15px;
    }

    .email {
      color: #fff;
      font-size: 14px;
    }

    .score-box {
      background-color: #fff;
      color: #000;
      border-radius: 12px;
      padding: 10px 20px;
      display: inline-block;
      margin-top: 20px;
      font-weight: 600;
    }

    .score-value {
      color: #7344a9;
      font-weight: bold;
      font-size: 20px;
      margin-left: 10px;
    }

    .logout-btn {
      background-color: #ffc107;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      padding: 12px 40px;
      width: 80%;
      margin-top: 25px;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: #e0a800;
    }
  </style>
</head>
<body>

<?php include 'includes/nav.php'; ?>

<div class="container profile-container">
  <div class="profile-card shadow">
    <!-- Avatar -->
    <img src="images/akun.png" alt="Avatar" class="profile-img">

    <!-- Username & Email -->
    <div class="username"><?= htmlspecialchars($_SESSION['user']) ?></div>
    <div class="email"><?= htmlspecialchars($_SESSION['email']) ?></div>

    <!-- Skor -->
    <?php if ($score): ?>
      <div class="score-box mt-3">
        Latest Score: <span class="score-value"><?= htmlspecialchars($score['score']) ?></span>
      </div>
    <?php else: ?>
      <div class="score-box mt-3">
        Belum mengerjakan quiz
      </div>
      <br>
      <a href="quizzy.php" class="btn btn-light mt-3">Ayo coba Quizzy!</a>
    <?php endif; ?>
  </div>

  <!-- Logout -->
  <form action="logout.php" method="post">
    <button type="submit" class="logout-btn shadow mt-4">Logout</button>
  </form>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

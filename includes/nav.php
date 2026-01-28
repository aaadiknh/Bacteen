<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .nav-link {
      font-weight: 400;
      transition: all 0.2s ease-in-out;
    }

    .nav-link:hover {
      font-weight: 600;
      color: #7344a9 !important;
    }

    .nav-link.active {
      font-weight: 700;
      color: #7344a9 !important;
    }

    .form-switch .form-check-input:checked {
      background-color: #7344a9;
      border-color: #7344a9;
    }

    .music-toggle {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-left: 15px;
    }

    #musicPlayer {
      display: none;
    }
  </style>
</head>
<body>
<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include __DIR__ . '/../db.php';

$base_url = '/bacteen';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <img src="<?= $base_url ?>/images/logo bacteen.png" alt="Logo" width="150" height="40" class="me-2"/>

    <!-- Hamburger -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Menu -->
    <div class="d-none d-lg-block ms-auto">
      <ul class="navbar-nav d-flex flex-row align-items-center gap-3">
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="<?= $base_url ?>/index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'materi.php') ? 'active' : '' ?>" href="<?= $base_url ?>/materi.php">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'video.php') ? 'active' : '' ?>" href="<?= $base_url ?>/video.php">Video Pembelajaran</a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['user'])): ?>
            <a class="nav-link <?= ($current_page == 'quizzy.php') ? 'active' : '' ?>" href="<?= $base_url ?>/quizzy.php">Quizzy</a>
          <?php else: ?>
            <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="<?= $base_url ?>/login.php" onclick="return confirm('Silakan login terlebih dahulu untuk mengakses Quizzy.')">Quizzy</a>
          <?php endif; ?>
        </li>
        <li class="nav-item d-flex align-items-center">
          <?php if (isset($_SESSION['user'])): ?>
            <a class="nav-link <?= ($current_page == 'profil.php') ? 'active' : '' ?>" href="<?= $base_url ?>/profil.php">Profil</a>
          <?php else: ?>
            <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="<?= $base_url ?>/login.php">Login</a>
          <?php endif; ?>
        </li>
        <li class="nav-item d-flex align-items-center music-toggle">
          <label class="form-check-label" for="toggleMusic">Musik</label>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="toggleMusic" checked>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal Mobile Menu -->
<div class="modal fade d-lg-none" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="<?= $base_url ?>/index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link <?= ($current_page == 'materi.php') ? 'active' : '' ?>" href="<?= $base_url ?>/materi.php">Materi</a></li>
          <li class="nav-item"><a class="nav-link <?= ($current_page == 'video.php') ? 'active' : '' ?>" href="<?= $base_url ?>/video.php">Video Pembelajaran</a></li>
          <li class="nav-item">
            <?php if (isset($_SESSION['user'])): ?>
              <a class="nav-link <?= ($current_page == 'quizzy.php') ? 'active' : '' ?>" href="<?= $base_url ?>/quizzy.php">Quizzy</a>
            <?php else: ?>
              <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="<?= $base_url ?>/login.php" onclick="return confirm('Silakan login terlebih dahulu untuk mengakses Quizzy.')">Quizzy</a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION['user'])): ?>
              <a class="nav-link <?= ($current_page == 'profil.php') ? 'active' : '' ?>" href="<?= $base_url ?>/profil.php">Profil</a>
            <?php else: ?>
              <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="<?= $base_url ?>/login.php">Login</a>
            <?php endif; ?>
          </li>
        </ul>

        <!-- Toggle Musik di Mobile -->
        <div class="music-toggle mt-4">
          <label class="form-check-label" for="toggleMusicMobile">Musik</label>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="toggleMusicMobile">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- YouTube Music (audio only) -->
<iframe id="musicPlayer"
  width="0" height="0"
  src="https://www.youtube.com/embed/lTRiuFIWV54?autoplay=1&mute=0&enablejsapi=1&loop=1&playlist=lTRiuFIWV54"
  frameborder="0"
  allow="autoplay"
  allowfullscreen
  style="display: none;">
</iframe>

<!-- Musik Script -->
<script>
  const toggle = document.getElementById('toggleMusic');
  const toggleMobile = document.getElementById('toggleMusicMobile');
  const musicPlayer = document.getElementById('musicPlayer');
  const YOUTUBE_URL = "https://www.youtube.com/embed/lTRiuFIWV54?autoplay=1&mute=0&enablejsapi=1&loop=1&playlist=lTRiuFIWV54";

  function playMusic() {
    musicPlayer.src = YOUTUBE_URL;
    localStorage.setItem('music', 'on');
    if (toggle) toggle.checked = true;
    if (toggleMobile) toggleMobile.checked = true;
  }

  function stopMusic() {
    musicPlayer.src = "";
    localStorage.setItem('music', 'off');
    if (toggle) toggle.checked = false;
    if (toggleMobile) toggleMobile.checked = false;
  }

  document.addEventListener("DOMContentLoaded", () => {
    const status = localStorage.getItem('music');
    if (status === 'off') {
      stopMusic();
    } else {
      playMusic();
    }
  });

  if (toggle) toggle.addEventListener('change', () => toggle.checked ? playMusic() : stopMusic());
  if (toggleMobile) toggleMobile.addEventListener('change', () => toggleMobile.checked ? playMusic() : stopMusic());
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

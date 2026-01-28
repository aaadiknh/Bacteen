<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Pembelajaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="includes/navbar.css" rel="stylesheet">
  <link href="includes/footer.css" rel="stylesheet">
  <link href="css/video.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <?php
  $video = [
    "1. Pengertian Bakteri" => "video/pengertian.php",
    "2. Struktur Bakteri" => "video/struktur.php",
    "3. Cara Reproduksi Bakteri" => "video/reproduksi.php",
    "4. Dasar Pengelompokkan Bakteri" => "video/pengelompokkan.php",
    "5. Peranan Bakteri dalam kehidupan sehari-hari" => "video/peranan.php"
  ];
  foreach ($video as $judul => $link): ?>
    <a href="<?= $link ?>" class="text-decoration-none text-dark">
      <div class="video-box">
        <span><?= $judul ?></span>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>

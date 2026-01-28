<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Materi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="includes/navbar.css" rel="stylesheet">
  <link href="includes/footer.css" rel="stylesheet">
  <link href="css/materi.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <?php
  $materi = [
    "1. Pengertian Bakteri" => "materi/pengertian.php",
    "2. Struktur Bakteri" => "materi/struktur.php",
    "3. Cara Reproduksi Bakteri" => "materi/reproduksi.php",
    "4. Dasar Pengelompokkan Bakteri" => "materi/pengelompokkan.php",
    "5. Peranan Bakteri dalam kehidupan sehari-hari" => "materi/peranan.php"
  ];
  foreach ($materi as $judul => $link): ?>
    <a href="<?= $link ?>" class="text-decoration-none text-dark">
      <div class="materi-box">
        <span><?= $judul ?></span>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>

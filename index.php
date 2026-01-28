<?php include 'includes/nav.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <title>Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/beranda.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <a href="materi.php" class="menu-box" style="background-color: #ffcd00;">
      <img src="images/pic1.png" class="menu-icon-left" alt="Materi">
      <span class="menu-text">Materi Bacteen</span>
      <img src="images/book.png" class="menu-icon-right" alt="Book">
    </a>

    <a href="video.php" class="menu-box" style="background-color: #38b0ff;">
      <img src="images/pic2.png" class="menu-icon-left" alt="Video">
      <span class="menu-text">Video Bacteen</span>
      <img src="images/play.png" class="menu-icon-right" alt="Play">
    </a>

    <a href="quizzy.php" class="menu-box" style="background-color: #ff0080;">
      <img src="images/pic3.png" class="menu-icon-left" alt="Quizzy">
      <span class="menu-text">Quizzy Bacteen</span>
      <img src="images/question.png" class="menu-icon-right" alt="Question">
    </a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>

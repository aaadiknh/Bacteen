<?php include '../includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dasar Pengelompokkan Bakteri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    .video-container {
      max-width: 720px;
      margin: 50px auto;
      text-align: center;
    }

    .video-title {
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #000;
    }

    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      border: 5px solid #38b0ff;
      border-radius: 15px;
      overflow: hidden;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    .video-source {
      margin-top: 15px;
      font-size: 0.95rem;
      color: #000;
      font-weight: 600;
    }

    .video-source a {
      color: #38b0ff; 
      text-decoration: underline;
      font-weight: 600;
    }
    </style>
</head>
<body>

  <!-- Kontainer Video -->
  <div class="container video-container">
    <div class="video-title text-center">
      Dasar Pengelompokkan Bakteri
    </div>

    <div class="video-wrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/5WVh4nRbNZ8?si=EtDgDA0NDZBZAEC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <!-- Tambahan sumber video -->
    <p class="video-source">
      Sumber: <a href="https://youtu.be/5WVh4nRbNZ8?si=sUutLoTi4hdq8vsV" target="_blank">GONG BUBIO</a>
    </p>

  </div>

  <?php include '../includes/footer.php'; ?>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- API YouTube Player -->
  <script>
    let player;

    function onYouTubeIframeAPIReady() {
      player = new YT.Player('youtubeVideo');
    }

    function playVideo() {
      if (player) player.playVideo();
    }

    function pauseVideo() {
      if (player) player.pauseVideo();
    }

    function stopVideo() {
      if (player) player.stopVideo();
    }

    // Load YouTube Iframe API
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Footer Bacteen</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body, footer {
      font-family: 'Poppins', sans-serif;
    }

    footer {
      background-color: #ffffff;
      box-shadow: 0px -4px 20px rgba(115, 68, 169, 0.15);
    }

    footer a {
      color: #212529;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    footer h6 {
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .social-icon {
      color: #7344a9;
      font-size: 1.3rem;
      margin-right: 10px;
      width: 30px;
      display: inline-block;
      text-align: center;
    }

    .footer-bottom {
      border-top: 1px solid #ddd;
      padding-top: 1rem;
      margin-top: 1rem;
      text-align: center;
    }

    .logo-text {
      font-size: 14px;
      color: #555;
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>

  <!-- Footer -->
  <footer class="pt-5 pb-3">
    <div class="container">
      <div class="row text-start text-md-left">
        <!-- Logo dan Tagline -->
        <div class="col-md-4 mb-4">
          <div class="d-flex flex-column align-items-start">
            <img src="/bacteen/images/logo bacteen.png" alt="Bacteen Logo" style="height: 60px;">
            <p class="logo-text">Belajar asik, hasilnya fantastik!</p>
          </div>
        </div>

        <!-- Follow Us -->
        <div class="col-md-4 mb-4">
          <h6>Follow Us:</h6>
          <ul class="list-unstyled">
            <li><i class="bi bi-instagram social-icon"></i>Instagram</li>
            <li><i class="bi bi-youtube social-icon"></i>YouTube</li>
            <li><i class="bi bi-tiktok social-icon"></i>TikTok</li>
          </ul>
        </div>

        <!-- Company -->
        <div class="col-md-4 mb-4">
          <h6>Company</h6>
          <ul class="list-unstyled">
            <li><a href="#">Kontak Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Testimoni</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <small>&copy; 2025 Bacteen Education</small>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

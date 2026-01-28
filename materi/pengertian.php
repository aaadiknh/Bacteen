<?php include '../includes/nav.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Pengertian Bakteri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../includes/navbar.css" rel="stylesheet" />
  <link href="../includes/footer.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    /* Reset margin & padding + cegah scroll horizontal */
    html, body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    /* Container slider */
    .slider-container {
      position: relative;
      max-width: 900px;
      margin: 40px auto;
      overflow: hidden;
      padding-top: 40px;
      padding-bottom: 40px;
      /* NO horizontal padding supaya tombol prev/next gak keluar */
    }

    /* Wrapper slide fleksibel */
    .slider-wrapper {
      display: flex;
      transition: transform 0.6s ease-in-out;
      /* width di-set via JS */
    }

    /* Set tiap slide */
    .slide {
      flex: 0 0 100%; /* 1 slide penuh container */
      box-sizing: border-box;
      padding: 20px;
    }

    /* Tombol navigasi */
    .nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: transparent;
      border: none;
      cursor: pointer;
      z-index: 10;
      width: 50px;
      height: 50px;
      padding: 0;
    }

    .nav-btn img {
      width: 100%;
      height: 100%;
      user-select: none;
      pointer-events: none;
      display: block;
    }

    .prev-btn {
      left: 10px; /* posisi aman di dalam container */
    }

    .next-btn {
      right: 10px;
    }

    /* Konten dalam slide */
    .content-box {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .content-box img {
      width: 60%;
      height: auto;
      border: 3px solid #ffcd00;
      border-radius: 10px;
      padding: 10px;
      display: block;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      .content-box {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>


  <div class="container slider-container">
    <button class="nav-btn prev-btn" onclick="prevSlide()" aria-label="Previous Slide">
      <img src="../images/yellow_prev.png" alt="Previous" />
    </button>
    <button class="nav-btn next-btn" onclick="nextSlide()" aria-label="Next Slide">
      <img src="../images/yellow_next.png" alt="Next" />
    </button>

    <div class="slider-wrapper" id="slider">
      <!-- Slide 1 -->
      <div class="slide">
        <p style="text-align: justify;">
        Halo,<i>Bacteers</i>! Kamu pernah mendengar istilah bakteri, kan? Ternyata, tanpa kamu sadari, bakteri ini banyak tersebar di sekeliling kita, lho! Di dalam gedung, di jalan, maupun di alat transportasi, pasti ada aja bakteri yang menempel. Tapi, karena ukurannya yang sangaaaaattt kecil, jadi kita nggak bisa lihat wujudnya tanpa alat bantu mikroskop.
        </p>

        <p style="text-align: justify;">
        <i>Wah,</i> jadi kaya hantu, dong! Ada di mana-mana, tapi tidak kasat mata. Hiiiiii~~
        </p>

        <p style="text-align: justify;">
        Hmm, kalau dipikir-pikir lagi, bakteri itu sebenarnya apa, sih? Makhluk hidup atau bukan? Tergolong hewan, tumbuhan, atau bukan keduanya? Ada yang bisa jawab?
        </p>

        <div class="content-box">
          <img src="../images/bakteri2.png" alt="bakteri" />
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide">
        <h2 class="fw-bold mb-3">Pengertian Bakteri</h2>
          <p style="text-align: justify;">
            Bakteri adalah kelompok <b>mikroorganisme bersel satu </b> yang masuk pada tingkat klasifikasi <b> domain</b>dan digolongkan sebagai <b>prokariota</b> bersama dengan domain <b>Archaea</b>. Sel bakteri memiliki bentuk tertentu, misalnya berbentuk seperti bola, batang, atau spiral.
          </p>
          <p>Bakteri merupakan salah satu bentuk kehidupan pertama yang muncul dan saat ini masih menghuni sebagian besar habitat di bumi. Bakteri bisa hidup di tanah, air, mata air panas yang asam, limbah radioaktif, hingga kerak bumi. Jadi, nggak heran kan, kalau di sekeliling kita tersebar banyak sekali bakteri?
          </p>

      </div>

      <!-- Slide 3 -->
      <div class="slide">
        <div class="content-box">
          <img src="../images/bakteri.png" alt="bakteri" />
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p>Nah, dari penjelasan di atas, kita bisa simpulkan bahwa bakteri itu merupakan makhluk hidup, tapi bukan termasuk tumbuhan atau hewan, ya, karena bakteri merupakan <b>mikroorganisme</b>. Namun, bakteri ternyata juga menjalin hubungan <b>simbiosis</b> lho, dengan tumbuhan, hewan, bahkan manusia. Contohnya, di dalam rantai makanan, bakteri berperan sebagai mikroorganisme yang dapat menyintesis vitamin B12 dari sisa-sisa makanan atau tubuh hewan yang sudah mati. Lalu, vitamin ini akan diserap oleh tumbuhan dan hewan yang terlibat dalam rantai makanan tersebut. Selain itu, ada juga beberapa jenis bakteri yang hidup dalam <b>sistem pencernaan</b> tubuh hewan atau manusia, seperti bakteri E. Coli.
          </p>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p>Pada manusia dan sebagian besar hewan, bakteri paling banyak berada di saluran pencernaan dan kulit. Tapi tenang, <i>guys,</i> mayoritas bakteri yang hidup di tubuh kita nggak berbahaya kok, karena tubuh kita dilindungi oleh sistem imun. Tapi, meskipun ada banyak jenis bakteri yang dapat <b> memberikan manfaat</b> bagi kita, tetap banyak juga ya, jenis bakteri yang bersifat <b> patogenik</b> dan bisa menyebabkan <b>penyakit menular</b>. Contohnya bakteri <i>Mycobacterium tuberculosis</i>yang menyebabkan penyakit Tuberkulosis.
          </p>

        </div>
      </div>

    </div>
  </div>

  <?php include '../includes/footer.php'; ?>

  <script>
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slide');

    // Set lebar slider-wrapper sesuai jumlah slide
    slider.style.width = `${slides.length * 100}%`;

    // Set lebar tiap slide sesuai jumlah total slide
    slides.forEach(slide => {
      slide.style.flex = `0 0 ${100 / slides.length}%`;
    });

    let currentSlide = 0;

    function showSlide(index) {
      if (index < 0) index = slides.length - 1;
      if (index >= slides.length) index = 0;

      slider.style.transform = `translateX(-${index * (100 / slides.length)}%)`;
      currentSlide = index;
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    // Tampilkan slide pertama pas halaman load
    showSlide(0);
  </script>

</body>
</html>

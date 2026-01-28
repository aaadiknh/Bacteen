<?php include '../includes/nav.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Struktur Bakteri</title>
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
        <h2 class="fw-bold mb-3">Struktur Bakteri</h2>
        <p style="text-align: justify;">
        Struktur bakteri terdiri dari beberapa bagian, masing-masing menjalankan fungsi tersendiri. Apa saja struktur bakteri dan fungsinya? Perhatikan gambar struktur bakteri di bawah ini, <i>Bacteers</i>!
        </p>

        <div class="content-box">
          <img src="../images/struktur.png" alt="Struktur bakteri secara umum" />
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide">
          <p style="text-align: justify;">
            Bakteri adalah kelompok <b>mikroorganisme bersel satu </b> yang masuk pada tingkat klasifikasi <b> domain</b>dan digolongkan sebagai <b>prokariota</b> bersama dengan domain <b>Archaea</b>. Sel bakteri memiliki bentuk tertentu, misalnya berbentuk seperti bola, batang, atau spiral.
          </p>
          <p>Bakteri merupakan salah satu bentuk kehidupan pertama yang muncul dan saat ini masih menghuni sebagian besar habitat di bumi. Bakteri bisa hidup di tanah, air, mata air panas yang asam, limbah radioaktif, hingga kerak bumi. Jadi, nggak heran kan, kalau di sekeliling kita tersebar banyak sekali bakteri?
          </p>

      </div>

      <!-- Slide 3 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Dinding Sel</b>
          </p>
          <p>Dinding sel bakteri adalah lapisan luar yang mengelilingi sel dan memberikan bentuk serta perlindungan bagi sel. Komponen utamanya adalah <i>peptidoglikan,</i> yang merupakan polimer gula dan peptida. Dinding sel yang kuat memungkinkan bakteri untuk bertahan di lingkungan yang berbeda dan melindungi sel dari kekuatan mekanis.
          </p>

          <div class="content-box">
            <img src="../images/dinding sel.jpg" alt="Struktur Dinding Sel Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Membran Sel</b>
          </p>
          <p>Di bawah dinding sel, bakteri memiliki membran sel yang mengelilingi sitoplasma, yaitu materi genetik dan organel sel. Membran sel berperan dalam mengatur pergerakan zat-zat yang masuk dan keluar sel serta berfungsi sebagai tempat terjadinya berbagai reaksi metabolik.
          </p>

          <div class="content-box">
            <img src="../images/membran.png" alt="Membran Sel Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 5 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Sitoplasma</b>
          </p>
          <p>Sitoplasma merupakan cairan sel yang mengandung nutrisi sel. Sitoplasma juga merupakan tempat organel berada dan merupakan tempat terjadinya proses metabolisme sel. Jadi kalau kamu nyariin organelnya bakteri, ada di bagian sitoplasma ini, ya!
          </p>

        </div>
      </div>

      <!-- Slide 6 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Ribosom</b>
          </p>
          <p>Ribosom merupakan salah satu organel yang tidak memiliki membran. Ribosom berfungsi sebagai tempat terjadinya translasi RNA dan sintesis atau pembuatan protein.
          </p>

          <div class="content-box">
            <img src="../images/ribosom.png" alt="Ribosom pada Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 7 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Kromosom</b>
          </p>
          <p><i>Next,</i> ada kromosom yang merupakan tempat materi genetik berupa DNA sirkuler yang membentuk nukleoid dan berperan sebagai pembawa sifat.
          </p>

          <div class="content-box">
            <img src="../images/kromoson.png" alt="Kromoson pada Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 8 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Flagel</b>
          </p>
          <p>Beberapa bakteri memiliki flagela, yaitu struktur berbentuk cambuk yang membantu dalam pergerakan. Flagela memungkinkan bakteri bergerak ke tempat yang lebih menguntungkan untuk mendapatkan nutrisi atau menghindari lingkungan yang tidak sesuai.
          </p>

          <div class="content-box">
            <img src="../images/flagel bakteri.png" alt="Struktur Flagel pada Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 9 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Pili</b>
          </p>
          <p><i>Pili</i> merupakan tonjolan kecil menyerupai rambut yang muncul dari permukaan sel luar dan lebih pendek dari flagela. Tanpa adanya <i>pili,</i>banyak bakteri patogen kehilangan kemampuannya untuk menginfeksi karena tidak dapat menempel pada jaringan inang.Salah satu bagian dari struktur sel bakteri ini berfungsi untuk membantunya menempel pada sel dan permukaan lain. Fungsi lain dari struktur ini adalah sebagai penghubung saat konjugasi, yang terjadi ketika dua bakteri bertukar fragmen DNA.
          </p>

        </div>
      </div>

      <!-- Slide 9 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Kapsul</b>
          </p>
          <p>Kapsul adalah salah satu bagian dalam struktur sel bakteri yang terbuat dari karbohidrat kompleks polisakarida. Kapsul dimiliki oleh beberapa jenis bakteri tertentu saja. Fungsi yang paling penting dari bagian tubuh ini adalah menjaga bakteri supaya tidak mengering dan melindunginya agar tidak ditelan oleh mikroorganisme lain.
          </p>

        </div>
      </div>

      <!-- Slide 10 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Plasmid</b>
          </p>
          <p>Beberapa jenis bakteri memiliki lingkaran materi genetik ekstra pada struktur tubuhnya yang disebut plasmid. Seperti kromosom, plasmid terbuat dari potongan DNA melingkar. Akan tetapi, plasmid tidak terlibat dalam reproduksi.p
          </p>
          <p>
          Plasmid bereplikasi secara independen dari kromosom. Meski tidak terlalu penting untuk kelangsungan hidupnya, bagian tubuh bakteri ini memberikan beberapa keuntungan selektif. Plasmid dapat mengandung gen yang membuat bakteri resisten terhadap antibiotik tertentu.
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

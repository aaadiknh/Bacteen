<?php include '../includes/nav.php'; 
$base_url = '/bacteen';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dasar Pengelompokkan Bakteri</title>
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
        <h2 class="fw-bold mb-3">Dasar Pengelompokkan Bakteri</h2>
        <p style="text-align: justify;">
        Bacteers, kamu pasti sadar kalau di sekitar kita, sangat mudah untuk menemukan bakteri. Tahukah kamu kalau bakteri terdiri dari berbagai jenis? <i>"Wah, </i> aku pikir cuma ada satu jenis bakteri <i>aja”.</i>Ternyata <i>nggak, lho,</i>bakteri terdiri dari beberapa kelompok yang berbeda. Kira-kira apa saja dasar pengelompokkan bakteri,<i>ya</i>?
        </p>
      </div>

      <!-- Slide 2 -->
      <div class="slide">
        <div class="content-box">
          <img src="../images/pengertian1.png" alt="Ilustrasi Bakteri" />
          <p style="text-align: justify;">
            Dari peta konsep di atas, sekarang kita bahas satu-satu <i>yuk</i>!
          </p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>1. Bentuk</b></p>
          <p><b>a.) Basil (<i>bacillus</i>): berbentuk batang atau silinder </b> dengan variasi <i>monobasil</i> (hanya satu), <i>diplobacillus</i> (bergandengan dua-dua) dan <i>streptobacillus </i>(bergandengan berbentuk rantai). Meski begitu, ada juga yang berbentuk agak bundar sehingga disebut <i>coccobacillus</i>. Contoh bakterinya adalah <i>
          Bacillus anthracis</i>.
          </p>

          <p><b>b.) Kokus (coccus)</b>: berbentuk bulat seperti bola. Variasinya:
            <ul>
              <li>Micrococcus (tunggal)</li>
              <li>Diplococcus (bergandengan dua-dua)</li>
              <li>Tetracoccus (bergandengan empat membentuk bujur sangkar)</li>
              <li>Sarcina (bergerombol membentuk kubus)</li>
              <li>Staphylococcus (bergerombol)</li>
              <li>Streptococcus (bergandengan membentuk rantai)</li>
            </ul>
            Contoh: <i>Staphylococcus aureus</i>.
          </p>

          <p><b>c.) Spiral (spirillum)</b>: bakteri yang berbentuk lengkung seperti spiral. Variasinya:
            <ul>
              <li>Vibrio: berbentuk koma (lengkung kurang dari setengah lingkaran)</li>
              <li>Spiral: lengkung lebih dari setengah lingkaran</li>
              <li>Spirochete: bentuk lengkung membentuk struktur fleksibel</li>
            </ul>
            Contoh: <i>Treponema pallidum</i>.
          </p>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide">
        <div class="content-box">
          <img src="../images/flagel.png" alt="Kelompok Bakteri berdasarkan flagea" />
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>2. Jumlah dan Letak Flagela</b></p>
          <p>Flagela atau yang sering disebut dengan bulu cambuk adalah bagian dari struktur sel yang berbentuk batang atau spiral dan terletak pada dinding sel dan berfungsi sebagai alat gerak. Untuk jelasnya, kamu bisa lihat gambar di bawah ini:
          </p>
          <div class="content-box">
            <img src="../images/flagel2.png" alt="Kelompok Bakteri berdasarkan flagea" />
          </div>
          <p style="text-align: justify;">
            Beberapa contoh bakterinya adalah <i>Pseudomonas aeruginosa</i> (monotrik), <i>Aquaspirillum serpens</i> (amfitrik), <i>Pseudomonas fluorescent</i> (lofotrik), <i>Salmonella typhosa</i> (peritrik), dan <i>Escherichia coli </i> (atrik).
          </p>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="slide">
        <p style="text-align: justify;">
        <p><b>3. Kebutuhan terhadap Oksigen</b></p>
        <p>Berbeda dari makhluk hidup lain yang membutuhkan oksigen, ada beberapa jenis bakteri yang bisa <b>hidup tanpa oksigen </b>.Bakteri jenis ini disebut dengan bakteri <b>anaerob</b>. Meski begitu, tetap ada jenis bakteri yang <b>membutuhkan oksigen untuk hidup</b> atau sering disebut dengan <b>bakteri aerob.</b> Salah satu contoh bakteri aerob adalah bakteri nitrifikasi, yang akan mengubah amonia menjadi nitrat. Sedangkan contoh bakteri anaerob adalah <i>Micrococcus denitrificans </i> yang dapat merombak senyawa menjadi metan.
        </p>
      </div>

      <!-- Slide 7 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>4. Karakteristik Dinding Sel</b></p>
          <p>Cara mengelompokkan bakteri berdasarkan karakteristik dinding sel dikenalkan oleh Hans Christian Gram pertama kali melalui <b>pewarnaan gram</b>. Pada pengelompokan ini, bakteri dibedakan menjadi bakteri gram negatif, bakteri gram positif, dan bakteri tidak berdinding sel.
          </p>

          <p><b>a.)  Bakteri gram negatif</b> adalah bakteri yang memiliki lapisan peptidoglikan tipis dan dinding sel mampu menyerap warna merah. Contohnya adalah bakteri bergenus <i>Streptomyces, Streptococcus, Mycrobacterium tuberculosis,</i>dll.
          </p>

          <p><b>b.)  Bakteri gram positif</b> merupakan bakteri yang memiliki lapisan peptidoglikan tebal dan dinding selnya mampu menyerap warna violet. Contohnya adalah bakteri ungu, <i>Enterobacteria, Vibrio, </i>dll.
          </p>

          <p><b>c.)  Bakteri tidak berdinding sel</b> sama seperti namanya,  berarti tidak memiliki dinding sel. Salah satu bakteri yang bertipe ini adalah bakteri <i>Micoplasma. </i>
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

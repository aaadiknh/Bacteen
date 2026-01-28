<?php include '../includes/nav.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Peranan Bakteri dalam Kehidupan sehari-hari</title>
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
        Haii, <i>Bacteers</i>! siapa di antara kalian yang sudah pernah mengonsumsi antibiotik? Biasanya kalau sedang sakit, kalian sering ya mengonsumsi antibiotik. Tahukah kamu, antibiotik itu diproses dengan bantuan bakteri, lho! Waah… jadi bakteri itu ada manfaatnya ya? Ada, dong! Kalau pengaruh negatifnya, ada juga, nggak? Ada, dong! Yuk, kita mencari tahu peranan bakteri dalam kehidupan sehari-hari. 
        </p>
      </div>

      <!-- Slide 2 -->
      <div class="slide">
        <h2 class="fw-bold mb-3">Peranan Bakteri dalam Kehidupan Sehari-hari</h2>
          <p style="text-align: justify;">

            Bakteri memiliki peran yang penting dan beragam dalam kehidupan sehari-hari manusia. Beberapa peran tersebut adalah sebagai berikut.
          </p>
          <div class="content-box">
            <img src="../images/peranan.png" alt="Peranan Bakteri" />
          </div>

      </div>

      <!-- Slide 3 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Bakteri dalam Pencernaan</b>
          </p>
          <p>Bakteri yang hidup di saluran pencernaan manusia membantu mencerna makanan yang kompleks dan menghasilkan nutrisi yang dapat diserap oleh tubuh. Bakteri ini juga membantu menjaga keseimbangan mikroflora usus. Contohnya, <i> Escherichia coli </i> yang membantu  sintesis vitamin K dan B, serta membantu dalam pencernaan makanan.
          </p>

        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Bakteri dalam Industri Pangan</b>
          </p>
          <p>Beberapa bakteri digunakan dalam produksi makanan beku dan makanan olahan lainnya. Selain itu, Bakteri juga berperan dalam proses pembuatan olahan susu. Buat kalian yang suka <i>yoghurt,</i> bakteri <i>Lactobacillus Casei, Lactobacillus Bulgaricus,</i> dan <i>Streptococcus Lactis</i>juga turut berperan nih. Ketiga bakteri tersebut nggak hanya mengolah <i>yoghurt,</i>tapi juga mengolah produk susu yang lain, ya. Atau kalian ada yang suka makan nata de coco? Nah, bakteri <i>Acetobacter xylinum </i>juga berperan dalam proses pembuatannya!</p>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Bakteri sebagai Pengurai Sampah Organik</b>
          </p>
          <p>Bakteri berperan penting dalam proses penguraian sampah organik di lingkungan. Bakteri membantu menguraikan bahan-bahan organik menjadi senyawa yang lebih sederhana dan ramah lingkungan. Misalnya, <i>Bacillus subtilis</i> yang menguraikan bahan organik seperti sisa makanan, daun, dan limbah pertanian. <i>Pseudomonas aeruginosa</i> yang mampu menguraikan senyawa organik kompleks dalam limbah rumah tangga dan industri.
          </p>

        </div>
      </div>

      <!-- Slide 6 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Bakteri dalam Siklus Nutrisi</b>
          </p>
          <p>Bakteri berperan dalam siklus nutrisi, seperti siklus nitrogen. Bakteri membantu mengubah nitrogen dalam atmosfer menjadi bentuk yang dapat digunakan oleh tumbuhan. Bakteri penghasil biogas adalah kelompok <i>Bacteriodes</i> dan kelompok <i>Enterobactericeacea. </i>Sedangkan bakteri pengikat nitrogen antara lain <i>Rhizobium radicicola</i> dan <i>Nitrosococcus.</i>
          </p>

        </div>
      </div>

      <!-- Slide 7 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>Peranan Negatif Bakteri</b>
          </p>
          <p>Setelah membahas manfaat bakteri, sekarang lanjut ke peranan negatif bakteri, ya. Bakteri memiliki peranan negatif terhadap hewan, manusia, dan tumbuhan. Pada hewan, bakteri menyebabkan antara lain penyakit sapi gila dan TBC pada unggas. Bakteri yang menyebabkan penyakit sapi gila adalah <i>Bacillus antharicis,</i>sedangkan yang menyebabkan TBC pada unggas adalah <i>Mycobacterium avium. </i>
          </p>

          <p>Kalian pernah sakit tipes sebelumnya? Nah, penyakit tersebut disebabkan oleh bakteri Salmonella Thyposa. Penyakit TBC dan tetanus juga disebabkan oleh bakteri, lho. Bakteri yang menyebabkan TBC adalah <i>Mycobbacterium tuberculosis, </i>sedangkan yang menyebabkan penyakit tetanus adalah <i>Clostridium tetani.</i>
          </p>

          <p>Bakteri juga merugikan tumbuhan. Bakteri dapat menyebabkan bercak cokelat pada tanaman anggrek dan menyebabkan rebah pada tanaman pepaya. Bakteri yang menyebabkan bercak cokelat pada tanaman anggrek adalah <i>Pseudomonas cattleyae, </i> dan yang menyebabkan rebah pada tanaman pepaya adalah <i>Bacterium papaya.</i>
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

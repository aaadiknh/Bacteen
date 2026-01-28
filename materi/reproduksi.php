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
        <h2 class="fw-bold mb-3">Cara Reproduksi Bakteri</h2>
        <p style="text-align: justify;">
        Pada umumnya, bakteri melakukan reproduksi secara <b>aseksual.</b> Hmm, aseksual itu berarti tidak kawin, ya? Yap, betul banget! Umumnya, bakteri melakukan reproduksi alias berkembangbiak dengan cara <b>membelah diri</b> dengan proses <b>pembelahan biner.</b> Artinya, setiap sel pada bakteri akan membelah dirinya menjadi dua.
        </p>

        <p>
        <i>Eits,</i> tapi, mungkin nggak, sih, bakteri melakukan reproduksi secara <b>seksual</b>? Ternyata, mungkin aja, lho! Ada juga beberapa jenis bakteri yang melakukan perkembangbiakannya secara seksual. Caranya adalah dengan melakukan <b>pertukaran materi genetik</b> dengan bakteri lainnya. Proses ini juga dikenal dengan istilah <b>rekombinasi genetik.</b>
        </p>

        <p>
        Reproduksi bakteri bisa terjadi dalam dua tahap, yaitu reproduksi aseksual dan seksual.
        </p>

      </div>

      <!-- Slide 2 -->
      <div class="slide">
          <div style="text-align: justify;">
          <p><b>1. Reproduksi aseksual</b></p>
          <p>Bakteri mengalami reproduksi aseksual dengan cara pembelahan biner, yaitu pembelahan dari satu menjadi dua sel dan seterusnya. Pembelahan biner ini termasuk pembelahan amitosis. Artinya, pembelahannya tidak melibatkan tahapan pembelahan sel seperti halnya manusia, melainkan berlangsung spontan atau secara langsung. Untuk melihat tahapannya, simak gambar berikut.
          </p>

          <div class="content-box">
            <img src="../images/aseksual.png" alt="Reproduksi Bakteri Secara Aseksual" />
          </div>
          <p>Gambar di atas menunjukkan bahwa satu sel induk hanya mengalami pemanjangan dan pembagian nukleoid hingga akhirnya terbentuk sekat pada masing-masing nukleoid hasil bentukannya.
          </p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>2. Reproduksi seksual</b></p>
          <p>Reproduksi seksual bakteri bisa terjadi melalui mekanisme rekombinasi gen melalui tiga cara, yaitu konjugasi, transduksi, dan transformasi.
          </p>

          <p><b>a.)  Konjugasi</b>
          </p>
          <p>Konjugasi adalah tahap reproduksi seksual pada bakteri yang ditandai dengan pemindahan materi genetik secara langsung. Pemindahan itu terjadi dari satu bakteri ke bakteri lain melalui jembatan konjugasi. Adapun tahapan yang terjadi di dalam konjugasi adalah sebagai berikut.</p>
          <p style="text-align: justify;">
            <ul>
              <li>Dua sel bakteri saling mendekat hingga akhirnya terbentuk struktur jembatan yang menghubungkan antara kedua sel.</li>
              <li>Terjadi transfer kromosom dan plasmid.</li>
              <li>Untuk bakteri yang menerima kromosom dan plasmid, materi genetiknya menjadi materi genetik rekombinan.</li>
              <li>Bakteri dengan materi genetik rekombinan akan memisahkan diri. Akibatnya, terbentuk dua sel anakan dengan sifat baru (rekombinan).</li>
            </ul>
          </p>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="slide">
        <div style="text-align: justify;">
          <div class="content-box">
            <img src="../images/konjugasi.png" alt="Proes Konjugasi Reproduksi Bakteri" />
          </div>
          <p>Tidak semua bakteri melakukan konjugasi. Contoh bakteri yang melakukan konjugasi adalah <i>Salmonelli typhi</i> dan <i>Escherichia coli</i> (menggunakan pilus seks). </p>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>b.)  Transduksi</b>
          </p>
          <p>Pada proses transduksi melibatkan peran organisme lain, yaitu virus. Itulah mengapa rekombinasi gen antara dua bakteri dijembatani oleh virus fag (bakteriofag). Virus yang paling sesuai digunakan untuk proses transduksi ini adalah virus fag temperat. Hal itu karena virus ini mampu bereplikasi secara litik dan lisogenik. Adapun tahapan dalam transduksi adalah sebagai berikut.
          </p>

          <p style="text-align: justify;">
            <ul>
              <li>Bakteri diinfeksi oleh virus fag, sehingga virus mengandung DNA bakteri tersebut.</li>
              <li>Virus fag tersebut kemudian akan menginfeksi bakteri-bakteri lainnya. Akibatnya, terbentuk bakteri baru dengan rekombinasi gen sesuai dengan rekombinasi gen pada virus penginfeksinya.</li>
              <li>Terbentuklah bakteri-bakteri rekombinan.</li>
            </ul>
          </p>

          <p style="text-align: justify;">
            Untuk lebih jelasnya, simak gambar berikut ini.
          </p>

        </div>
      </div>

      <!-- Slide 6 -->
      <div class="slide">
        <div style="text-align: justify;">
          <div class="content-box">
            <img src="../images/transduksi.png" alt="Proes Transduksi Reproduksi Bakteri" />
          </div>
        </div>
      </div>

      <!-- Slide 7 -->
      <div class="slide">
        <div style="text-align: justify;">
          <p><b>c.)  Transformasi</b>
          </p>
          <p>Jika pada konjugasi bakteri akan memindahkan materi genetiknya melalui jembatan penghubung, pada transformasi tidak demikian. Pada transformasi, materi genetik akan dipindahkan oleh bakteri secara langsung atau tidak melalui jembatan penghubung (jembatan konjugasi). Namun, tidak semua bakteri lho yang mampu memindahkan materi genetiknya secara langsung. 
          </p>

          <p>
            Biasanya, bakteri yang mampu bertransformasi adalah bakteri yang memproduksi enzim tertentu. Contohnya adalah <i>Rhizobium, Neissera, Bacillus,</i> dan <i> Pneumococcus. </i> Agar pemahamanmu menjadi lebih mudah, perhatikan gambar berikut.
          </p>

          <div class="content-box">
            <img src="../images/transformasi.png" alt="Proes Transformasi Reproduksi Bakteri" />
          </div>

        </div>
      </div>

      <!-- Slide 8 -->
      <div class="slide">
        <div style="text-align: justify;">

          <div class="content-box">
            <img src="../images/cara rekombinasi.png" alt="Penjelasan Rekomendasi genetik" />
          </div>
          <p>Lantas, bagaimana dengan proses pembuatan insulin? Proses pembuatan insulin melibatkan peran bakteri <i> Escherichia coli.</i> Bakteri tersebut disisipi oleh gen penghasil insulin. Nah, sejalan dengan reproduksi bakteri, insulin yang dihasilkan juga sebanyak bakteri anakan yang terbentuk. Dengan adanya hal ini, terbukti bahwa tidak selamanya bakteri bersifat merugikan. 
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

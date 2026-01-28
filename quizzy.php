<?php 
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Soal
$questions = [
     
     ["question" => "Dalam suatu eksperimen, bakteri dimodifikasi untuk tidak memiliki pili. Apa kemungkinan dampak utama dari perubahan ini?", 
     "options" => ["Bakteri tidak dapat membelah diri", "Bakteri tidak dapat bergerak aktif", "Bakteri tidak dapat menempel dan melakukan transfer gen", "Bakteri kehilangan kemampuan fotosintesis", "Bakteri tidak dapat membentuk kapsul"], 
     "answer" => "Bakteri tidak dapat menempel dan melakukan transfer gen"],

    ["question" => "Sebuah perusahaan farmasi mencoba memproduksi vaksin menggunakan bakteri transgenik. Faktor yang paling krusial dalam memilih jenis bakteri tersebut adalah.....", 
     "options" => ["Bakteri tidak memiliki dinding sel", "Dapat hidup di lingkungan asam", "Mudah dikloning dan berproliferasi cepat", "Bersifat patogenik agar respons imun tinggi", "Dapat menghasilkan ATP melalui fotosintesis"], 
     "answer" => "Mudah dikloning dan berproliferasi cepat"],

    ["question" => "Jika terjadi mutasi pada gen yang mengatur pembentukan septum saat pembelahan biner, apa konsekuensinya terhadap bakteri tersebut?", 
     "options" => ["Bakteri membentuk spora ganda", "Terjadi pembelahan tak sempurna dan pembentukan filamen", "Bakteri berkembang menjadi multiseluler", "Bakteri tidak mengalami sintesis DNA", "Bakteri mati sebelum membelah"], 
     "answer" => "Terjadi pembelahan tak sempurna dan pembentukan filamen"],

     ["question" => "Perhatikan gambar berikut:<br><div class='content-box'><img src='images/q1.png' alt='Bakteri' /></div><br>Bagian manakah yang menjadi kunci dalam resistensi antibiotik?",
     "options" => ["A (Flagel)", "B (Pili)", "C (Plasmid)", "D (Kapsul)", "E (Sitoplasma)"],
     "answer" => "C (Plasmid)"],

    ["question" => "Dalam suatu investigasi makanan, ditemukan adanya bakteri anaerob obligat yang menghasilkan neurotoksin. Hipotesis yang paling tepat adalah.....", 
     "options" => ["Makanan terkontaminasi Clostridium botulinum", "Makanan mengandung Lactobacillus", "Makanan mengandung Salmonella typhi", "Fermentasi dilakukan oleh Bacillus subtilis", "Makanan tercemar E. coli"], 
     "answer" => "Makanan terkontaminasi Clostridium botulinum"],

    ["question" => "Mengapa bakteri ekstremofilik seperti Thermus aquaticus sangat penting dalam rekayasa DNA modern? karena.....", 
     "options" => ["Menghasilkan enzim Taq yang stabil di suhu tinggi", "Berperan dalam fermentasi alkohol", "Mampu membentuk kapsul antigenik", "Menghasilkan insulin secara alami", "Memiliki fotosistem I dan II"], 
     "answer" => "Menghasilkan enzim Taq yang stabil di suhu tinggi"],

    ["question" => "Perbedaan utama antara bakteri gram positif dan gram negatif yang memengaruhi efektivitas antibiotik adalah...", 
     "options" => ["Ketebalan membran plasma", "Komposisi DNA", "Keberadaan plasmid", "Jumlah ribosom", "Ketebalan peptidoglikan dan lapisan lipopolisakarida"], 
     "answer" => "Ketebalan peptidoglikan dan lapisan lipopolisakarida"],

    ["question" => "Seorang petani memanfaatkan polong tanaman kacang sebagai pupuk hijau. Jika diamati secara mikroskopik, akar tanaman tersebut memiliki nodul yang berisi bakteri...", 
     "options" => ["Nitrobacter yang bersimbiosis mutualisme", "Rhizobium yang mengikat nitrogen atmosfer", "Clostridium yang memfermentasi protein", " Spirulina yang bersifat autotrof", " Escherichia coli yang bersifat fakultatif"], 
     "answer" => "Rhizobium yang mengikat nitrogen atmosfer"],

    ["question" => "Bagaimana cara terbaik membedakan bakteri autotrof kemoautotrof dengan fotoautotrof?", 
     "options" => ["Berdasarkan dinding sel", "Berdasarkan tempat hidup", "Berdasarkan sumber karbon", "Berdasarkan sumber energi", "Berdasarkan struktur genetik"], 
     "answer" => "Berdasarkan sumber energi"],

    ["question" => "Ketika lingkungan kekurangan nutrien dan suhu ekstrem, beberapa bakteri akan membentuk struktur pelindung yang disebut.....", 
     "options" => ["Flagel", "Spora", "Plasmid", "Nukleoid", "Kapsul"], 
     "answer" => "Spora"],

    ["question" => "Bandingkan bakteri dengan virus dalam hal reproduksi dan struktur. Apa pernyataan yang paling tepat?", 
     "options" => ["MBakteri tidak dapat berkembang biak sendiri, virus bisa", "Virus memiliki organel lengkap, bakteri tidak", "Bakteri memiliki sel, virus tidak memiliki struktur sel", "Virus dapat membelah biner, bakteri tidak", "Bakteri bersifat anaerob, virus aerob"], 
     "answer" => "Bakteri memiliki sel, virus tidak memiliki struktur sel"],

    ["question" => "Bakteri digunakan untuk memproduksi hormon manusia seperti insulin. Teknologi ini dimungkinkan karena.....", 
     "options" => ["Bakteri memiliki enzim polimerase manusia", "Plasmid dapat dimodifikasi untuk membawa gen manusia", "Ribosom manusia dapat ditanam dalam bakteri", "Nukleus manusia dapat diambil untuk sintesis protein", "DNA bakteri dapat direduksi secara alami"], 
     "answer" => "Plasmid dapat dimodifikasi untuk membawa gen manusia"],

    ["question" => "Dalam uji resistensi antibiotik, diketahui bahwa bakteri A resisten terhadap penisilin, sementara bakteri B tidak. Namun, setelah dicampur, bakteri B menjadi resisten. Proses ini menunjukkan..", 
     "options" => ["Mutasi spontan", "Konjugasi", "Fermentasi", "Endosporisasi", "Replikasi silang"], 
     "answer" => "Konjugasi"],

    ["question" => "Lihatlah gambar hasil pewarnaan gram:<br><div class='content-box'><img src='images/q2.png' alt='Bakteri' /></div><br><br> Bakteri berwarna ungu dan merah muda <br>Manakah interpretasi yang benar?",
     "options" => ["Ungu = Gram negatif, dinding sel tipis", "Merah muda = Gram positif, dinding sel tebal", "Ungu = Gram positif, peptidoglikan tebal", "Merah muda = Gram positif, tahan antibiotik", "Ungu = Gram negatif, bersifat autotrof"],
     "answer" => "Ungu = Gram positif, peptidoglikan tebal"],

    ["question" => "Dalam ekosistem usus manusia, bakteri tertentu membantu pencernaan dan sintesis vitamin. Bakteri tersebut adalah.....", 
     "options" => ["Vibrio cholerae", "Clostridium tetani", "Mycobacterium tuberculosis", "Bacillus anthracis", "Escherichia coli (strain non-patogenik)"], 
     "answer" => "Escherichia coli (strain non-patogenik)"],

    ["question" => "Dua siswa berdebat. Siswa A berkata bakteri tidak memiliki nukleus. Siswa B berkata bahwa bakteri tetap bisa membuat protein. Kesimpulan yang benar adalah.....", 
     "options" => ["Keduanya salah", "Hanya A benar karena bakteri adalah eukariotik", "Hanya B benar karena bakteri memiliki nukleus", "A dan B benar karena bakteri memiliki ribosom", "A salah, B salah karena bakteri adalah virus"], 
     "answer" => "A dan B benar karena bakteri memiliki ribosom"],

    ["question" => "Mengapa antibiotik tidak efektif terhadap infeksi virus, tetapi efektif pada infeksi bakteri?", 
     "options" => ["Virus lebih besar dari bakteri", " Virus tidak memiliki dinding sel sebagai target antibiotik", "Virus memiliki enzim pelindung antibiotik", "Antibiotik merusak kapsid virus", "Virus menyerang antibiotik terlebih dahulu"], 
     "answer" => " Virus tidak memiliki dinding sel sebagai target antibiotik"],

    ["question" => "Bakteri yang hidup di lingkungan bersalinitas tinggi seperti Laut Mati harus memiliki struktur khusus yang mencegah kehilangan air melalui osmosis. Struktur tersebut adalah.....", 
     "options" => ["Flagel panjang", "Ribosom tahan garam", "Dinding sel dengan tekanan osmotik tinggi", "Pili pendek untuk adhesi", "Enzim proteolitik tinggi"], 
     "answer" => "Dinding sel dengan tekanan osmotik tinggi"],

    ["question" => "Untuk membersihkan tumpahan minyak di laut, digunakan bakteri yang memecah hidrokarbon. Proses ini disebut.....", 
     "options" => ["Bioremediasi", "Biokonversi", "Bioteknologi merah", "Bioaugmentasi", "Biomimikri"], 
     "answer" => "Bioremediasi"],

    ["question" => "Seorang siswa mengisolasi bakteri dari tanah yang dapat memproduksi antibiotik alami. Bakteri tersebut kemungkinan besar berasal dari genus.....", 
     "options" => [" Staphylococcus", " Pseudomonas", "Bacillus", " Streptomyces", "Clostridium"], 
     "answer" => "Streptomyces"],

    // Tambahkan soal lain jika perlu...
];

// Proses submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['score'])) {
    $score = intval($_POST['score']);
    $user_id = $_SESSION['id'];

    $check = mysqli_query($conn, "SELECT * FROM quiz_results WHERE user_id = $user_id");
    if (mysqli_num_rows($check) > 0) {
        mysqli_query($conn, "UPDATE quiz_results SET score = $score WHERE user_id = $user_id");
    } else {
        mysqli_query($conn, "INSERT INTO quiz_results (user_id, score) VALUES ($user_id, $score)");
    }

    $title = "";
    $message = "";

    if ($score <= 50) {
        $title = "Ayoo coba lagi!!";
        $message = "Jangan menyerah, terus belajar ya!";
    } elseif ($score < 100) {
        $title = "Semangat yaa!";
        $message = "Sedikit lagi kamu bisa dapat nilai sempurna!";
    } else {
        $title = "Congratulations";
        $message = "You did a great job in the test!";
    }


echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <title>Congratulations</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap' rel='stylesheet'>
    <style>
        body {
            background-color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .trophy-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
        }
        .trophy-img {
            max-width: 350px;
        }
        .score-box {
            background-color: #a259ff;
            color: white;
            font-size: 22px;
            font-weight: bold;
            border-radius: 20px;
            width: 300px;
            margin: 0 auto;
            padding: 10px 20px;
            text-align: center;
        }
        h2 {
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 10px;
            color: #000;
        }
        .desc {
            color: #555;
            font-size: 18px;
            margin-bottom: 35px;
        }
        .btn-yellow {
            background-color: #ffcd00;
            color: #fff; /* Sesuai permintaan: teks putih */
            font-weight: 600;
            border-radius: 30px;
            padding: 10px 30px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border: none;
        }
        .btn-yellow:hover {
            background-color: #ffd700;
            color: #fff;
        }
        .btn-pink {
            background-color: #ff0080;
            color: #fff;
            font-weight: 600;
            border-radius: 30px;
            padding: 10px 30px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border: none;
        }
        .btn-pink:hover {
            background-color: #e60073;
        }
    </style>
</head>
<body>
    <div class='trophy-container'>
        <img src='images/piala.png' alt='Piala' class='trophy-img'>
        <div class='score-box'>Skor : $score</div>
    </div>
    <h2>$title</h2>
    <div class='desc'>$message</div>
    <a href='quizzy.php' class='btn-yellow'>&#8635; Coba lagi</a>
    <a href='index.php' class='btn-pink'>Kembali ke Beranda ➜</a>
</body>
</html>";

    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Quizzy of Bacteen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .question-box {
            display: none;
            position: relative;
            padding: 0 70px;
            margin-bottom: 40px;
        }

        .question-box::after {
            content: "";
            display: table;
            clear: both;
        }

        .option-label {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 12px 18px;
            background-color: #fce4f4; /* pink muda */
            border-radius: 12px;
            border: 2px solid #ff80c0;
            transition: background-color 0.2s ease;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .option-label:hover {
            background-color: #ffd6ec;
        }

        .option-label img {
            width: 30px;
            height: 30px;
            margin-right: 12px;
            border-radius: 50%;
            object-fit: contain;
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
        left: -20px; /* posisi aman di dalam container */
        }

        .next-btn {
        right: -20px;
        }

        .submit-btn {
            background-color: #7344a9;
            color: white;
            font-weight: 600;
            font-size: 1 rem;
            float: right;
            border: none;
            border-radius: 15px;
            padding: 7px 20px;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #a58ad2;; /* efek hover */
        }
        .content-box img {
            width: 60%;
            height: auto;
            border: 3px solid #38b0ff;
            border-radius: 10px;
            padding: 10px;
            display: block;
            margin: 0 auto;
            }
    </style>
</head>
<body>
<?php include 'includes/nav.php'; ?>

<div class="container mt-5">
    <form id="quiz-form" method="post" style="max-width: 700px; margin: 0 auto;">
        <?php foreach ($questions as $index => $q): ?>
            <div class="question-box" id="question<?= $index ?>">
                <h5><?= ($index + 1) . ". " . $q["question"] ?></h5>
                <?php foreach ($q["options"] as $optIndex => $option): 
                    $label = chr(65 + $optIndex); // A, B, C, D, E
                ?>
                    <label class="option-label" for="answer<?= $index . '_' . $label ?>">
                        <input type="radio" class="form-check-input me-2" id="answer<?= $index . '_' . $label ?>" name="answer<?= $index ?>" value="<?= $option ?>" required />
                        <img src="images/<?= strtolower($label) ?>.png" alt="<?= $label ?>" />
                        <?= htmlspecialchars($option) ?>
                    </label>
                <?php endforeach; ?>

                <?php if ($index > 0): ?>
                    <button type="button" class="nav-btn prev-btn" data-index="<?= $index ?>">
                        <img src="images/pink_prev.png" alt="Previous" />
                    </button>
                <?php endif; ?>

                <?php if ($index < count($questions) - 1): ?>
                    <button type="button" class="nav-btn next-btn" data-index="<?= $index ?>">
                        <img src="images/pink_next.png" alt="Next" />
                    </button>
                <?php endif; ?>

                <?php if ($index == count($questions) - 1): ?>
                    <button type="submit" class="submit-btn">Submit ></button>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <input type="hidden" name="score" id="score" value="0" />
    </form>
</div>

<?php include 'includes/footer.php'; ?>

<script>
const questions = <?= json_encode($questions) ?>;
let current = 0;

function showQuestion(index) {
    document.querySelectorAll('.question-box').forEach((box, i) => {
        box.style.display = (i === index) ? 'block' : 'none';
    });
    current = index;
}

document.addEventListener('DOMContentLoaded', function () {
    showQuestion(0);

    document.querySelectorAll('.next-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const index = parseInt(btn.getAttribute('data-index'));
            showQuestion(index + 1);
        });
    });

    document.querySelectorAll('.prev-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const index = parseInt(btn.getAttribute('data-index'));
            showQuestion(index - 1);
        });
    });

    document.getElementById('quiz-form').addEventListener('submit', function (e) {
        let score = 0;
        questions.forEach((q, i) => {
            const selected = document.querySelector(`input[name="answer${i}"]:checked`);
            if (selected && selected.value === q.answer) score++;
        });
        score = score * 5; // 1 soal = 5 poin → 20 soal = 100 poin maksimum
        document.getElementById('score').value = score;
    });
});
</script>
</body>
</html>

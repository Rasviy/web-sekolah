<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang Kami - SMK Wikrama 1 Garut</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    .section-title {
      font-weight: 700;
      color: #1a237e;
    }

    .section-content {
      background-color: #f9f9f9;
      border-radius: 12px;
      padding: 40px;
      margin-top: 30px;
      margin-bottom: 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    p {
      color: #333;
      font-size: 16px;
    }

    footer {
      background-color: #0c1233;
      color: white;
      padding: 40px 0;
    }

    footer a {
      color: white;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="py-5 text-center text-white" style="background-color: #0c1233;">
  <div class="container">
    <h1 class="display-5 fw-bold">Tentang Kami</h1>
    <p class="lead">Rumah / Tentang Kami</p>
  </div>
</section>

//TENTANG
<section class="container py-5">
  <div class="text-center">
    <h5 class="fw-bold">
      SMK Wikrama 1 Garut merupakan lembaga pendidikan kejuruan yang berfokus pada pengembangan keterampilan dan karakter siswa.
    </h5>
    <h5 class="fw-bold mt-3">
      Kami percaya bahwa pendidikan bukan hanya soal akademik, tetapi juga membentuk pribadi yang tangguh, kreatif, dan berakhlak mulia.
    </h5>
    <h5 class="fw-bold mt-3">
      Dengan fasilitas lengkap, pengajar profesional, serta kerja sama dengan dunia industri, kami siap mencetak lulusan yang siap bersaing di dunia kerja maupun melanjutkan ke jenjang pendidikan tinggi.
    </h5>
  </div>
</section>

//KONTAK
<section class="py-5">
  <div class="container text-center">
    <h6 class="text-primary fw-bold mb-2">— Hubungi Kami —</h6>
    <h2 class="fw-bold mb-4">Informasi Lebih Lanjut</h2>
    <p class="mb-5 text-muted">Jangan sungkan untuk menghubungi kami</p>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="bi bi-geo-alt-fill fs-2 text-primary mb-3"></i>
          <h5 class="fw-bold">Alamat</h5>
          <p class="text-muted">Kp. Tanjung Ds. Pasawahan Kec. Tarogong Kaler Kab Garut 44151</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="bi bi-envelope-fill fs-2 text-primary mb-3"></i>
          <h5 class="fw-bold">E-mail</h5>
          <p class="text-muted">info@smkwikrama1garut.sch.id<br>smkwikrama1garut.sch.id</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <i class="bi bi-telephone-fill fs-2 text-primary mb-3"></i>
          <h5 class="fw-bold">Saluran telepon</h5>
          <p class="text-muted">+62811 2232 880<br>(Tersedia Whatsapp)</p>
        </div>
      </div>
    </div>
  </div>
</section>

//LOKASI
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Lokasi Sekolah</h2>
    <p class="text-center text-muted mb-4">Silakan kunjungi lokasi kami di peta berikut:</p>
    <div class="ratio ratio-16x9">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63365.091820784356!2d107.87207102408632!3d-7.171752600000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b0c3cbcb1f29%3A0xc96607822a7646b0!2sSMK%20Wikrama%201%20Garut!5e0!3m2!1sid!2sid!4v1712921255142!5m2!1sid!2sid"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

//FOOTER
<footer>
  <div class="container">
    <div class="row">
      <!-- Tentang Kami -->
      <div class="col-md-6 mb-4">
        <h5 class="fw-bold mb-3">Tentang kami</h5>
        
        <p class="text-white">
          Alamat<br>
          Jl. Otto Iskandardinata Kp Tanjung Ds Pasawahan Kec Tarogong Kaler, Kabupaten Garut.<br>
          Nomor telepon: 081323314430<br>
          Email: info@smkwikrama1garut.sch.id
        </p>
        <div>
          <a href="#" class="me-2"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="me-2"><i class="bi bi-youtube fs-5"></i></a>
          <a href="#"><i class="bi bi-envelope fs-5"></i></a>
        </div>
      </div>

      <div class="col-md-6 text-md-end">
        <h5 class="fw-bold">Konsultan</h5>
        <img src="img/logo-ids-rumah-pendidikan-indonesia-1@2x.8d71af15.png" alt="IDS Logo" style="max-width: 300px;"><br>
      </div>
    </div>
    <hr style="border-color: rgba(255,255,255,0.1);">
    <div class="text-center mt-3">
      &copy; 2022 . Semua Hak Dilindungi Undang-Undang
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

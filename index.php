<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Wikrama 1 Garut</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      position: relative;
      background: url(img/657212846.jpg) center center/cover no-repeat;
      color: white;
      padding: 100px 0;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-image: linear-gradient(to right, white, rgba(255,255,255,0));
      background-color: rgba(0,34,85,0.6);
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
    .btn-custom {
      padding: 12px 30px;
      font-weight: bold;
      border-radius: 8px;
      font-size: 16px;
    }
    .btn-daftar {
      background-color: #0B1957; color: #fff; border: none;
    }
    .btn-daftar:hover {
      background-color: #081342;
    }
    .btn-konsultasi {
      background-color: #1679FF; color: #fff; border: none;
    }
    .btn-konsultasi:hover {
      background-color: #005ee2;
    }
    .career-icon {
      color: #198754;
    }
    .card-title {
      font-size: 18px;
      font-weight: bold;
    }
  </style>
</head>
<body>


<section class="hero">
  <div class="container hero-content text-custom-navy">
    <h5 class="text-primary">Pondok Pesantren</h5>
    <h1 class="fw-bold text-black">SMK WIKRAMA 1 GARUT</h1>
    <p class="text-black">
      Sekolah komputer, bisnis manajemen, dan pariwisata yang <br>
      mengutamakan pendidikan akhlak mulia untuk melahirkan pemimpin <br>
      "berhati Mekah berotak Jerman" melek teknologi di era 4.0.
    </p>
    <a href="#" class="btn btn-daftar btn-custom">Daftar sekarang</a>
    <a href="https://api.whatsapp.com/send/?phone=628112232880" class="btn btn-konsultasi btn-custom">Konsultasi</a>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col-md-4">
        <div class="p-3 shadow-sm rounded-3 bg-white">
          <h4 class="fw-bold text-primary">Moto</h4>
          <p>Ilmu yang Amaliah<br>Amal yang Ilmiah<br>Akhlakul Karimah</p>
          <hr style="border-top: 5px solid orange; width: 300px; margin: 0 auto;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 shadow-sm rounded-3 bg-white">
          <h4 class="fw-bold text-primary">Sikap</h4>
          <p>Aku Ada,<br>Lingkunganku Bahagia</p>
          <hr style="border-top: 5px solid orange; width: 300px; margin: 0 auto;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 shadow-sm rounded-3 bg-white">
          <h4 class="fw-bold text-primary">Afirmasi</h4>
          <p>Pada-Mu Negeri, Kami Berjanji<br>Lulus Wikrama<br>Siap Membangun Negeri</p>
          <hr style="border-top: 5px solid orange; width: 300px; margin: 0 auto;">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/XVoDV4ry3HA" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h5 class="text-primary fw-bold text-center">Program Pilihan</h5>
        <h3 class="fw-bold text-dark text-center">SMK Wikrama 1 Garut</h3>
        <h5 class="fw-bold mt-3">Program Unggulan (Asrama)</h5>
        <ul>
          <li>Menghafal Al-Qur'an & bahasa Arab</li>
          <li>Untuk lulusan SMP sederajat muslim</li>
          <li>Disiapkan untuk sertifikasi TOAFL</li>
        </ul>
        <h5 class="fw-bold mt-3">Program Reguler (Non Asrama)</h5>
        <ul><li>Untuk remaja muslim Garut lulusan SMP sederajat</li></ul>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-7 text-center">
        <h6 class="text-primary">Informasi Pendaftaran</h6>
        <h2 class="fw-bold text-dark">Penerimaan Siswa Baru TP<br> 2025–2026 Telah Dibuka</h2>
        <p class="text-danger fw-bold" style="font-size:24px;">Rp6.000.000</p>
        <strong>
          <p>Gelombang 1 sudah berakhir</p>
          <p>Hubungi admin untuk mendapat diskon lainnya</p>
        </strong>
        <a href="index1.php" class="btn btn-primary">Daftar Sekarang</a>
        <hr>
        <h5 class="fw-bold">Periode Pendaftaran</h5>
        <ul class="text-start">
          <li><strong class="text-primary">Gelombang 1:</strong> Sept–Des 2024</li>
          <li><strong class="text-primary">Gelombang 2:</strong> Jan–Apr 2025</li>
          <li><strong class="text-primary">Gelombang 3:</strong> Mei–Agustus 2025</li>
        </ul>
        <p><small>*Gelombang 2 & 3 hanya dibuka jika masih ada kuota.</small></p>
        <img src="img/Screenshot 2025-04-12 184658.png" class="img-fluid" width="640" height="299">
      </div>

      <div class="col-md-5">
        <h6 class="fw-bold">Lokasi sekolah</h6>
        <ul>
          <li>Mudah dijangkau, pinggir jalan nasional</li>
          <li>Dilalui angkot dan bus antar kota</li>
          <li><a href="tentang.php">Klik untuk lihat di Google Maps</a></li>
        </ul>
        <a href="#" class="btn btn-primary mb-3">Unduh Brosur</a>
        <h6 class="fw-bold">Hubungi kami</h6>
        <p><strong>Whatsapp:</strong> 0811 2232 880</p>
        <p><strong>Email:</strong> info@smkwikrama1garut.sch.id</p>
        <p><strong>Alamat:</strong> Jl. Otto Iskandardinata, Tarogong Kaler, Garut</p>
        <a href="#" class="btn btn-primary mb-3">Obrolan WA</a>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container text-center">
    <h5 class="text-primary">Jurusan</h5>
    <h2 class="fw-bold">Kompetensi Keahlian</h2>
    <p>SMK bidang teknologi informasi, bisnis manajemen, dan pariwisata</p>
    <div class="row mt-4">

      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="img/images (3).jpeg" class="card-img-top" alt="TKJ">
          <div class="card-body">
            <h5 class="card-title">Teknik Jaringan Komputer dan Telekomunikasi</h5>
            <ul class="text-start">
              <li><span class="career-icon">✔</span> Technical Support</li>
              <li><span class="career-icon">✔</span> Network Administrator</li>
              <li><span class="career-icon">✔</span> IoT Engineer</li>
              <li><span class="career-icon">✔</span> Cloud Engineer</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="img/images (1).jpeg" class="card-img-top" alt="PPLG">
          <div class="card-body">
            <h5 class="card-title">Pengembangan Perangkat Lunak dan Gim</h5>
            <ul class="text-start">
              <li><span class="career-icon">✔</span> Programmer</li>
              <li><span class="career-icon">✔</span> Web Developer</li>
              <li><span class="career-icon">✔</span> Mobile Developer</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="img/images (2).jpeg" class="card-img-top" alt="Marketing">
          <div class="card-body">
            <h5 class="card-title">Pemasaran (Digital Marketing)</h5>
            <ul class="text-start">
              <li><span class="career-icon">✔</span> Content Creator</li>
              <li><span class="career-icon">✔</span> SEO Specialist</li>
              <li><span class="career-icon">✔</span> Social Media Admin</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="img/images (4).jpeg" class="card-img-top" alt="Perhotelan">
          <div class="card-body">
            <h5 class="card-title">Perhotelan (Kepariwisataan)</h5>
            <ul class="text-start">
              <li><span class="career-icon">✔</span> Front Office</li>
              <li><span class="career-icon">✔</span> Room Service</li>
              <li><span class="career-icon">✔</span> Call Center</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>

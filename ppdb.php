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

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #1e1e1e;
    }
    .container {
      max-width: 1000px;
      margin: 50px auto;
      padding: 20px;
    }
    .highlight {
      color: #0033cc;
      font-weight: bold;
    }
    h1 {
      font-size: 36px;
      font-weight: 700;
      color: #1b1464;
    }
    .subtitle {
      font-size: 20px;
      color: #333;
      margin-bottom: 30px;
    }
    .row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
    }
    .left-buttons {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 25px;
      max-width: 300px;
    }
    .right-content {
      flex: 2;
    }
    .btn {
      padding: 15px;
      text-align: center;
      border: none;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      border-radius: 8px;
      transition: 0.3s;
    }
    .btn-dark {
      background: #1b1464;
      color: white;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .btn-dark:hover {
      background: #0f0f3e;
    }
    .btn-blue {
      background: #005bff;
      color: white;
    }
    .btn-blue:hover {
      background: #0044cc;
    }
    .download-btn {
      float: right;
      background: #005bff;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
    }
    .program-info {
      margin-bottom: 30px;
    }
    .program-info h3 {
      color: #1b1464;
      margin-bottom: 5px;
    }
    .program-info p {
      margin: 0;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="py-5 text-center text-white" style="background-color: #0c1233;">
  <div class="container">
    <h1 class="text-white fw-bold">Penerimaan Siswa Baru</h1>
    <p class="text-white">Rumah / Penerimaan Siswa Baru</p>
  </div>
</section>

<!-- //TENTANG -->
<div class="container">
    <a href="brosur.pdf" class="download-btn" target="_blank">Download Brosur</a>
    <p class="highlight">Telah di buka !!!</p>
    <h1>Pendaftaran Peserta Didik Baru</h1>
    <p class="subtitle">Tahun Pelajaran 2025 - 2026</p>
    
    <div class="row">
      <div class="left-buttons">
        <a href="#" class="btn btn-dark">Formulir Unggulan</a>
        <a href="#" class="btn btn-dark">Formulir Reguler</a>
        <a href="#" class="btn btn-blue">Rincian Biaya</a>
      </div>
      <div class="right-content">
        <div class="program-info">
          <h3>Program Unggulan</h3>
          <p>Bagi siswa yang berminat untuk <b>sekolah sambil menginap</b> di asrama Tahfidz Qur’an Al Ikrom Garut</p>
        </div>
        <div class="program-info">
          <h3>Program Reguler</h3>
          <p>Bagi putra daerah asal Kabupaten Garut yang <b>tidak tinggal di asrama</b></p>
        </div>
        <div class="program-info">
          <h3>Biaya Pendidikan</h3>
          <p>Rincian <b>biaya sekolah</b> dan asrama di SMK Wikrama 1 Garut dan islamic boarding school Al Ikrom</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<!-- //FOOTER -->
<!-- //FOOTER -->
<footer>
  <div class="container">
    <div class="row align-items-center">
      <!-- Kolom Tentang Kami -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5 class="fw-bold mb-3">Tentang Kami</h5>
        <p class="text-white mb-2">
          Alamat:<br>
          Jl. Otto Iskandardinata, Kp. Tanjung, Ds. Pasawahan, Kec. Tarogong Kaler, Kabupaten Garut.
        </p>
        <p class="text-white mb-2">
          Telp: <a href="tel:081323314430" class="text-white">0813 2331 4430</a><br>
          Email: <a href="mailto:info@smkwikrama1garut.sch.id" class="text-white">info@smkwikrama1garut.sch.id</a>
        </p>
        <div class="mt-3">
          <a href="#" class="me-3 text-white"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="me-3 text-white"><i class="bi bi-youtube fs-5"></i></a>
          <a href="mailto:info@smkwikrama1garut.sch.id" class="text-white"><i class="bi bi-envelope fs-5"></i></a>
        </div>
      </div>

      <!-- Kolom Konsultan -->
      <div class="col-md-6 text-md-end">
        <h5 class="fw-bold mb-3">Konsultan</h5>
        <img src="img/logo-ids-rumah-pendidikan-indonesia-1@2x.8d71af15.png" alt="IDS Logo" style="max-width: 250px;" class="img-fluid">
      </div>
    </div>

    <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">

    <div class="text-center">
      <p class="mb-1 text-white">© 2022 SMK Wikrama 1 Garut. Semua Hak Dilindungi Undang-Undang.</p>
      <p class="mb-0 text-white">Dibuat oleh <strong>Muhammad Justin Rasvyy</strong></p>
    </div>
  </div>
</footer>

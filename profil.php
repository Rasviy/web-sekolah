<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Sekolah - SMK Wikrama 1 Garut</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .section-content {
      background-color: #f9f9f9;
      border-radius: 12px;
      padding: 40px;
      margin-bottom: 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .section-title {
      font-weight: 700;
      color: #1a237e;
      font-size: 28px;
    }

    .section-subtitle {
      font-weight: 600;
      color: #0d47a1;
      margin-bottom: 15px;
    }

    .custom-list {
      padding-left: 20px;
      list-style-type: disc;
      color: #333;
    }

    .custom-list li {
      margin-bottom: 10px;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .section-content {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <?php include 'navbar.php'; ?>

//SEJARAH
  <div class="container py-5 section-content">
    <h2 class="text-center mb-4 section-title">SEJARAH SEKOLAH</h2>
    <p>
      SMK Wikrama 1 Garut didirikan pada tahun 2010 sebagai upaya untuk menyediakan pendidikan kejuruan yang berkualitas
      di Kabupaten Garut. Berawal dari hanya dua jurusan, sekolah ini terus berkembang hingga kini memiliki berbagai program unggulan,
      baik reguler maupun asrama.
    </p>
    <p>
      Dengan semangat <strong>"Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah"</strong>, SMK Wikrama 1 Garut terus berkomitmen untuk mencetak generasi yang siap bersaing
      di dunia kerja serta menjunjung tinggi nilai-nilai keislaman.
    </p>
  </div>

 //VISI MISI
  <div class="container py-5 section-content">
    <h2 class="text-center mb-4 section-title">VISI & MISI</h2>
    <div class="row">
      <div class="col-md-6">
        <h4 class="section-subtitle">Visi</h4>
        <p>
          Menjadi sekolah kejuruan unggulan yang mencetak lulusan berkarakter, berkompetensi global, dan berakhlakul karimah.
        </p>
      </div>
      <div class="col-md-6">
        <h4 class="section-subtitle">Misi</h4>
        <ul class="custom-list">
          <li>Menyelenggarakan pendidikan berbasis teknologi dan industri.</li>
          <li>Mengembangkan potensi siswa melalui kegiatan keagamaan, akademik, dan kewirausahaan.</li>
          <li>Membentuk karakter siswa yang berlandaskan nilai-nilai spiritual dan moral.</li>
          <li>Menjalin kerja sama dengan dunia usaha dan industri untuk penempatan kerja lulusan.</li>
        </ul>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

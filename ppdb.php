<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PPDB - SMK Wikrama 1 Garut</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4 text-center">Formulir Pendaftaran Siswa Baru</h2>

    <form action="proses_ppdb.php" method="POST" class="row g-3 needs-validation" novalidate>
      <div class="col-md-6">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>

      <div class="col-md-6">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" class="form-control" id="nisn" name="nisn" required>
      </div>

      <div class="col-md-6">
        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
      </div>

      <div class="col-md-6">
        <label for="no_hp" class="form-label">No HP Orang Tua</label>
        <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
      </div>

      <div class="col-md-6">
        <label for="jurusan" class="form-label">Jurusan Pilihan</label>
        <select id="jurusan" name="jurusan" class="form-select" required>
          <option selected disabled value="">-- Pilih Jurusan --</option>
          <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
          <option value="TKJ">Teknik Komputer dan Jaringan (TKJ)</option>
          <option value="BDP">Bisnis Daring dan Pemasaran (BDP)</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email Aktif</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="col-12">
        <label for="alamat" class="form-label">Alamat Lengkap</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary px-4">Kirim Pendaftaran</button>
      </div>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>

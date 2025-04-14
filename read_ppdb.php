<?php
include 'config.php';

$result = $conn->query("SELECT * FROM pendaftar");

if (!$result) {
  die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pendaftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4 text-center">Data Pendaftar</h2>
  <a href="index1.php" class="btn btn-primary mb-3">+ Tambah Pendaftar</a>
  <a href="index.php" class="btn btn-primary mb-3">Kembali</a>

  <?php if ($result->num_rows === 0): ?>
    <div class="alert alert-info text-center">Belum ada data pendaftar.</div>
  <?php else: ?>
    <table class="table table-striped table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NISN</th>
          <th>Asal Sekolah</th>
          <th>No HP</th>
          <th>Jurusan</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($row['nama']) ?></td>
          <td><?= htmlspecialchars($row['nisn']) ?></td>
          <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
          <td><?= htmlspecialchars($row['no_hp']) ?></td>
          <td><?= htmlspecialchars($row['jurusan']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['alamat']) ?></td>
          <td class="text-center">
            <a href="update_ppdb.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="delete_ppdb.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
</body>
</html>

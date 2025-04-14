<?php
include 'config.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM pendaftar WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $nisn = $_POST['nisn'];
  $asal_sekolah = $_POST['asal_sekolah'];
  $no_hp = $_POST['no_hp'];
  $jurusan = $_POST['jurusan'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];

  $sql = "UPDATE pendaftar SET nama='$nama', nisn='$nisn', asal_sekolah='$asal_sekolah',
          no_hp='$no_hp', jurusan='$jurusan', email='$email', alamat='$alamat' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header("Location: read_ppdb.php");
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Pendaftar</h2>
  <form method="POST">
    <input type="text" name="nama" class="form-control mb-2" value="<?= $data['nama'] ?>" required>
    <input type="text" name="nisn" class="form-control mb-2" value="<?= $data['nisn'] ?>" required>
    <input type="text" name="asal_sekolah" class="form-control mb-2" value="<?= $data['asal_sekolah'] ?>" required>
    <input type="text" name="no_hp" class="form-control mb-2" value="<?= $data['no_hp'] ?>" required>
    <input type="text" name="jurusan" class="form-control mb-2" value="<?= $data['jurusan'] ?>" required>
    <input type="email" name="email" class="form-control mb-2" value="<?= $data['email'] ?>" required>
    <textarea name="alamat" class="form-control mb-2" rows="3"><?= $data['alamat'] ?></textarea>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
</body>
</html>

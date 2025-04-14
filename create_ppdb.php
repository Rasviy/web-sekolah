<?php
include 'config.php';

$nama         = $_POST['nama'];
$nisn         = $_POST['nisn'];
$asal_sekolah = $_POST['asal_sekolah'];
$no_hp        = $_POST['no_hp'];
$jurusan      = $_POST['jurusan'];
$email        = $_POST['email'];
$alamat       = $_POST['alamat'];

$sql = "INSERT INTO pendaftar (nama, nisn, asal_sekolah, no_hp, jurusan, email, alamat) 
        VALUES ('$nama', '$nisn', '$asal_sekolah', '$no_hp', '$jurusan', '$email', '$alamat')";

if ($conn->query($sql) === TRUE) {
    header("Location: read_ppdb.php");
  } else {
    die("Gagal menyimpan data: " . $conn->error);
  }  

$conn->close();
?>
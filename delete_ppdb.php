<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM pendaftar WHERE id=$id");
header("Location: read_ppdb.php");
?>

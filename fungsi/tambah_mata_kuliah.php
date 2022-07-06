<?php
include 'koneksi.php';
$kode_mata_kuliah = $_POST['kode_mata_kuliah'];
$mata_kuliah = $_POST['mata_kuliah'];
$deskripsi = $_POST['deskripsi'];

// var_dump($deskripsi);
// die;

$query = "INSERT INTO daftar_mata_kuliah SET kode_mata_kuliah='$kode_mata_kuliah',nama_mata_kuliah='$mata_kuliah',deskripsi_mata_kuliah='$deskripsi'";
mysqli_query($db, $query);

header("location:../home.php");

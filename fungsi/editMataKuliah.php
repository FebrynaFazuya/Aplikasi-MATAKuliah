<?php
include 'koneksi.php';

$kode_mata_kuliah = $_POST['kode_mata_kuliah'];
$nama_mata_kuliah = $_POST['nama_mata_kuliah'];
$deskripsi_mata_kuliah = $_POST['deskripsi_mata_kuliah'];
$id = $_POST['id'];
mysqli_query($db, "UPDATE daftar_mata_kuliah SET kode_mata_kuliah='$kode_mata_kuliah', 
nama_mata_kuliah='$nama_mata_kuliah', deskripsi_mata_kuliah='$deskripsi_mata_kuliah' 
WHERE id_mata_kuliah ='$id'");
header("location:../home.php");

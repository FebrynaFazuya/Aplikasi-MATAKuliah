<?php
include 'koneksi.php';
$id_kode_mata_kuliah = $_POST['id_kode_mata_kuliah'];
$judul = $_POST['judul'];
$pertemuan_ke = $_POST['pertemuan_ke'];
$deskripsi_pertemuan = $_POST['deskripsi_pertemuan'];

// var_dump($id_kode_mata_kuliah);
// die;

$query = "INSERT INTO pertemuan SET judul='$judul',pertemuan_ke='$pertemuan_ke',deskripsi_pertemuan='$deskripsi_pertemuan',id_kode_mata_kuliah='$id_kode_mata_kuliah'";
mysqli_query($db, $query);

header("location:../detail.php?id=$id_kode_mata_kuliah");

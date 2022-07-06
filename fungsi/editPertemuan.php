<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$pertemuan_ke = $_POST['pertemuan_ke'];
$deskripsi_pertemuan = $_POST['deskripsi_pertemuan'];
$id = $_POST['id'];
$id_kode_mata_kuliah = $_POST['id_kode_mata_kuliah'];
mysqli_query($db, "UPDATE pertemuan SET judul='$judul', pertemuan_ke='$pertemuan_ke', deskripsi_pertemuan='$deskripsi_pertemuan' WHERE id_pertemuan='$id'");
header("location:../detail.php?id=$id_kode_mata_kuliah");

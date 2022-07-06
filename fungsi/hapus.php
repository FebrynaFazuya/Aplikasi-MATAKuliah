<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($db, "DELETE from daftar_mata_kuliah WHERE id_mata_kuliah ='$id'");
header("location:../home.php");

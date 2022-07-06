<?php
include 'koneksi.php';

$id = $_GET['id'];

// var_dump($id);
// die;

$query = "SELECT * pertemuan WHERE id_pertemuan = $id";
mysqli_query($db, $query);

header("location:../detail.php");

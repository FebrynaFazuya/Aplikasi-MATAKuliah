<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "uts";
$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("gagal terhubung ke server" . mysqli_connect_error());
}

$data = mysqli_query($db, "SELECT * FROM daftar_mata_kuliah");
// $data2 = mysqli_query($db, "SELECT * FROM prodi");
// $data4 = mysqli_query($db, "SELECT * FROM prodi");
// $data3 = mysqli_query($db, "SELECT * FROM mahasiswa");
// $result = mysqli_fetch_array($data);
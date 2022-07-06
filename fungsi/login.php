<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$cek_login = mysqli_query($db, "select * from user where email='$email' and password='$password'");
$cek = mysqli_num_rows($cek_login);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:../home.php");
} else {
    header("location:../login.php");
}

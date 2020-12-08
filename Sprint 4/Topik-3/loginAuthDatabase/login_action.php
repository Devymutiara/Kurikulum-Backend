<?php
//buat koneksi ke mySQL
session_start();
require_once("koneksi.php");

$uname = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$uname' and password = '$pass'");
$cek = mysqli_num_rows($login);


if($cek > 0) {
    $_SESSION['username'] = $uname;
    $_SESSION['status'] = "login";
    header("location: index.php");
} else {
    header("location: login.php?pesan=gagal");
}

?>
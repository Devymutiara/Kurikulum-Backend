<?php 

$unameLogin = 'depdepdep';
$passLogin = 'hellodunia';

session_start();

$uname = $_POST['username'];
$pass = $_POST['pass'];

if ($uname === $unameLogin && $pass === $passLogin) {
    session_start();
    $_SESSION['username'] = $uname;
    header("Location: beranda.php");
} else {
    header("Location: index.php");
}
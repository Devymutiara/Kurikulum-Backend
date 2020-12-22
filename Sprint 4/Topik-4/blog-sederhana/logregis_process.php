<?php
session_start();
include 'library.php';
$login = new Login();
// REGISTER
if(isset($_POST['daftar'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $login->register($uname, $email, $pass);
    header("location: greet.php");
} 

// LOGIN
if(isset($_POST['login'])) {
    $adminUname = "hanyaAdmin";
    $adminPass = "hanya123";
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    if($uname == $adminUname && $pass == $adminPass) {
        $_SESSION['username'] = "Author";
        $_SESSION['status'] = "admin";
    header("location: beranda_admin.php");
     } else if ($uname != $adminUname && $pass != $adminPass) {
        $login->masuk($uname, $pass);
    }
}

//LOGOUT
if ($_GET['link'] == "logout") {
    session_unset();
    header("location: login.php");
}
<?php

include 'library.php';
$posts = new Posts();
$login = new Login();

if(isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $curhat = $_POST['curhat'];
    $perihal = $_POST['perihal'];
    $tanggal = date("Y-m-d");

    $posts->addPost($judul, $curhat, $tanggal, $perihal);
    header("location: index.php");


} else if(isset($_POST['edit'])) {
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $curhat = $_POST['curhat'];
    $perihal = $_POST['perihal'];


    $posts->updatePost($judul, $curhat, $perihal, $id);
    header("location: index.php");
    
}

if($_GET['stmt'] === 'hapus') {
    $id = $_GET['id'];
    $posts->deletePost($id);
    header("location: index.php");

}

if(isset($_POST['daftar'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];

    $login->register($uname, $email, $pass);
    header("location: login.php?enrolled=selamat");
} 


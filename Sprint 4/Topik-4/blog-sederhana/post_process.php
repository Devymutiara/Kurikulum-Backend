<?php

include 'library.php';
$posts = new Posts();
$login = new Login();

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $date = date("Y-m-d");
    $kategori = $_POST['kategori'];

    $posts->addPost($title, $content, $author, $date, $kategori);
    header("location: beranda_admin.php");

} else if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $kategori = $_POST['kategori'];


    $posts->updatePost($title, $content, $author, $kategori, $id);
    header("location: beranda_admin.php");
    
} else if($_GET['send'] === 'delete') {
    $id = $_GET['id'];
    $posts->deletePost($id);
    header("location: beranda_admin.php");

}

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

    if($uname == $adminUname && $pass == $adminUname) {
    $_SESSION['username'] = "Author";
    $_SESSION['status'] = "admin";
    header("location: beranda_admin.php");
    }
    // } else if ($uname != $adminUname && $pass != $adminUname) {
    //     $uname = $_POST['username'];
    //     $pass = $_POST['password'];

    //     $login->masuk($uname, $pass);
    // }
}





// if($cek > 0) {
//     $_SESSION['username'] = $uname;
//     $_SESSION['status'] = "login";
//     header("location: index.php");
// } else {
//     header("location: login.php?pesan=gagal");
// }


// if(isset($_GET['pesan'])){
//     if($_GET['pesan'] == "gagal"){
//         echo "Login gagal! username dan password salah!";
//     }else if($_GET['pesan'] == "logout"){
//         echo "Anda telah berhasil logout";
//     }	
// }
// if($_SESSION['status'] == 'login') {
//     header("location: index.php");
// }



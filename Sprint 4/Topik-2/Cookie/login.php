<?php

$unameLogin = 'depdepdep';
$passLogin = 'hellodunia';

if ($uname === $unameLogin && $pass === $passLogin) {
    $_POST['username'] = $uname;
    header("Location: beranda.php");
} else {
    header("Location: index.php");
}


if (isset($_POST['remember'])) {
    // membuat cookie
        setcookie('login', 'true', time()+60*60*24*30);
    }

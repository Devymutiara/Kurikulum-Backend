<?php

$db = new PDO('mysql:host=localhost;dbname=katalog buku', 'root', 'Devy_@1999@_Mutiara');

//cek koneksi
try {
    $db;
    echo "Selamat! Anda berhasil terkoneksi.";
} catch (Exception $e) {
    echo "Terjadi galat!";

}
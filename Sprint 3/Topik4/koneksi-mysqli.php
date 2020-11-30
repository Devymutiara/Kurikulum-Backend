<?php
$db_connect = mysqli_connect("localhost", "root", "Devy_@1999@_Mutiara", "katalog buku");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} else {
    echo "Selamat! Anda telah terkoneksi dengan database.";
}
?>
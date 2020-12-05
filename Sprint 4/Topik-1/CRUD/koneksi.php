<?php
$koneksi = mysqli_connect("localhost", "root", "Devy_@1999@_Mutiara", "Sewa Buku");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>


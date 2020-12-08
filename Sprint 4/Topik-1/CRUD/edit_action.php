<?php
require_once("koneksi.php");
if(isset($_POST['submit'])){
    $id = $_POST['id']; 
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $seri = $_POST['seri'];
    $tanggal = $_POST['tanggal'];
    $lama = $_POST['lama'];
    // query update data
    $query = "UPDATE peminjaman_buku SET nama = '$nama', judul = '$judul', seri = '$seri', tanggal = '$tanggal', lama = '$lama' WHERE id = $id";
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        echo "Edit Data Gagal";
    }
}
?>  
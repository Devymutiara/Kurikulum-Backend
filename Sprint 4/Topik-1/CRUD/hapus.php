<?php
require_once("koneksi.php");
 
$id = $_GET['id'];
$query = "DELETE FROM peminjaman_buku WHERE id = '$id'"; // query hapus data
 
if(mysqli_query($koneksi, $query)){
    header("Location: index.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>
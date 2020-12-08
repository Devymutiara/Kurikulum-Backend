<?php
// mengalihkan halaman kembali ke index.php
require_once("koneksi.php");
if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['nama']);
    $judul = htmlspecialchars($_POST['judul']);
    $seri = htmlspecialchars($_POST['seri']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $lama = htmlspecialchars($_POST['lama']);

   $query = "INSERT INTO peminjaman_buku( nama, judul, seri, tanggal, lama) 
            VALUES ('$nama', '$judul', '$seri', '$tanggal', '$lama')";
   if(mysqli_query($koneksi, $query)){
       header("location: index.php");
   }else{
       echo "Tambah data gagal";
   }
}

mysqli_close($konek);

?>
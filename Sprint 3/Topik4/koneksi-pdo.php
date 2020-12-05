<?php

try {
  // buat koneksi dengan database
  $dbh = new PDO('mysql:host=localhost;dbname=katalog buku', "root", "Devy_@1999@_Mutiara");
  
  // set error mode
  $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
  // hapus koneksi
  $dbh = null;
  echo "Selamat! Anda telah terkoneksi dengan database.";
}
catch (PDOException $e) {
  // tampilkan pesan kesalahan jika koneksi gagal
  print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
  die();
}

?>
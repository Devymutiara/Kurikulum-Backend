<?php
session_start();
if($_SESSION['status']!="admin"){
    header("location:login.php");
}

include 'library.php';

if(isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $curhat = $_POST['curhat'];
    $perihal = $_POST['perihal'];
    $tanggal = date("Y-m-d");
    var_dump($judul);
    $posts->addPost($judul, $curhat, $tanggal, $tanggal);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Curhat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <center>
        <br>
        <h1>Tempat Mengedit</h1>
        <br>
        <br>
    </center>

    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-6">

                <form action="processpos.php" method="POST">
                    <div class="form-group mb-3">
                        <label>Tentang</label>
                        <input type="text" class="form-control" name="judul" required>
                        <small class="form-text text-muted">Curhat tapi jangan ghibah</small>
                    </div>

                    <div class="form-group mb-3">
                        <label>Curhat di sini</label>
                        <textarea class="form-control" name="curhat"cols="30" rows="10" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-control" name="perihal" required>
                            <option value="1">Futur</option>
                            <option value="2">Keluarga</option>
                            <option value="3">Pertemanan</option>
                            <option value="4">Pribadi</option>
                        </select>
                    </div>
                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                </form>
                
            </section>
        </section>
    </section>













    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    </body>
    </html>
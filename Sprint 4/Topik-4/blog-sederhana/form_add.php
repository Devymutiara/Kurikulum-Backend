<?php 
session_start();
if($_SESSION['status']!="admin"){
    header("location:login.php");
}

include 'library.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/stylesheet.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-11 col-md-7">
                <center>
                    <h2>Buat Artikel</h2>
                </center>
                <br>
                <br>
                <form action="post_process.php" method="POST" enctype="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ketik judul"
                            name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"
                            name="content" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda"
                            name="author" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda"
                            name="author" required>
                    </div>
                    <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="kategori" required>
                            <option value="">-- Pilih  Kategori --</option>
                            <option value="6">Privasi</option>
                            <option value="7">Agama</option>
                            <option value="8">Hobi</option>
                            <option value="9">Kesehatan</option>
                            <option value="10">Sains</option>
                            <option value="11">Teknologi</option>










                    </select>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="submit">Tambah Post</button>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>




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



                            <!-- <?php $posts = new Posts(); ?>
                            <?php if($posts->getCategory()) :?>
                            <?php foreach($posts->getCategory() as $post) :?>
                            <option><?= $post['kategori']; ?> </option>
                            <?php endforeach; ?>
                            <?php endif; ?> -->
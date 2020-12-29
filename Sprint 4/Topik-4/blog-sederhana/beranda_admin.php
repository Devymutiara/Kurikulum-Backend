<?php
session_start();
include 'library.php';
if($_SESSION['status']!="admin"){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="form_add.php">Tulis artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logregis_process.php?link=logout" onclick="myFunction()">Logout</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <main>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-11 col-md-7">
            
                    <?php $posts = new Posts(); ?>
                    <?php if($posts->getPost()) :?>
                    <?php foreach($posts->getPost() as $post) :?>
                    <!-- <?php var_dump($post); ?> -->
                    <div class="col">
                        <div class="card h-100 bg-light">
                            <img src="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><b><?= $post['title']; ?></b> </h4>
                                <h6 class="card-title"><b>Kategori : <?= $post['kategori']; ?></b> </h6>
                                <p class="card-text"><?= $post['content']; ?><div class="100"></div>
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">Penulis : <?= $post['author']; ?></small>&nbsp;&nbsp;&nbsp;
                                    <small class="text-muted"><?= "Ditulis tanggal ".$post['date']; ?></small>
                                    <div class="edit">
                                        <small class="text-muted edit-link"><a
                                                href="form_edit.php?id=<?= $post['id']; ?>"
                                                style="text-decoration: none">Edit</a></small>


                                        <small class="text-muted"><a href="post_process.php?id=<?= $post['id']; ?>&send=delete"
                                                style="text-decoration: none" onclick="return confirm('Anda yakin? Hal ini dapat menghapus data secara permanen.');">Hapus</a></small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <?php endforeach; ?>
                    <?php else :?>
                        <center><p>post is empty</p></center>
                    <?php endif; ?>

                    </div>
                </section>
            </section>
        </section>
    </main>
    <script>
function myFunction() {
    if (!confirm("Anda yakin ingin keluar?") == true ) {
        event.preventDefault();
    } else {
        window.location.href = "login.php"
    }
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
session_start();
include 'library.php';
if($_SESSION['status']!="user"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mampir ke Sini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>



    <br>
    <br>


    <center>
        <div class="jumbotron">
            <h1 class="display-4">Curblog</h1>
            <p class="lead">Tempat untuk menuangkan segala keluh kesah tapi Allahlah sebaik-baik tempat mengeluh</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Liat profil</a>
            <a class="btn btn-danger btn-lg" href="login.php?logout=yes" role="button">Keluar</a>
            <br>
            <br>
            <hr class="my-4">
        </div>
    </center>



    <section class="container-fluid">
        <section class="row justify-content-center">


            <?php $posts = new Posts(); ?>
            <?php if($posts->getPost()) :?>
            <?php foreach($posts->getPost() as $post) :?>
            <section class="col-3 my-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['judul'] ?></h5>
                            <p class="card-text"><?= $post['curhat'] ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $post['perihal'] ?></small>
                            <small class="text-muted"><?= $post['tanggal'] ?></small>
                        </div>
                    </div>
            </section>
            <?php endforeach; ?>
            <?php else :?>
            <?= "<center><p>Tidak ada curhatan untuk dibaca</p></center>" ?>
            <?php endif; ?>

        </section>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
    </html>
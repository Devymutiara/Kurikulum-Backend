<?php 
include 'library.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <center>
        <div class="jumbotron">
            <h1 class="display-4">List gaweanmu!</h1>
            <p class="lead">Iseng-iseng bikin to do list app pakai database</p>
            <a class="btn btn-primary btn-lg" href="formTambah.php" role="button">Ngelist</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Liat profil</a>
            <a class="btn btn-danger btn-lg" href="#" role="button">Metu</a>
            <hr class="my-4">
        </div>
    </center>

        <section class="container-fluid">
        <section class="row justify-content-center">
            

                <?php $posts = new Post();?>
                <?php if($posts->getPost()) :?>
                <?php foreach($posts->getPost() as $post) :?>
                    <section class="col-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['kegiatan']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $post['status']; ?></h6>
                        <span><?= $post['keterangan']; ?></span> <br>
                        <span><?= $post['penulis']; ?></span>
                        <p class="c ard-text"><?= $post['tanggal']; ?></p>
                        <a href="post_process.php?id=<?= $post['id']; ?>" class="card-link">edit</a>
                        <a href="post_process.php?id=<?= $post['id']; ?>&send=delete" class="card-link" onclick="return confirm('Anda yakin ingin menghapus post ini?');">hapus</a>
                    </div>
                </div>
                </div>
                <br>
                <br>
                </section>
                <?php endforeach; ?>

                <?php endif; ?>
            
        </section>
        </section>
                    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>                 
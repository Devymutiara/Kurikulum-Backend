<?php
session_start();
if($_SESSION['status']!="admin"){
    header("location:login.php");
} elseif (!$_SESSION){

}
include 'library.php';
$posts = new Posts();
$post = $posts->editPost($_GET['id']);
$id = $post['id'];
$judul = $post['judul'];
$curhat = $post['curhat'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <form action="processpos.php?id=<?= $id; ?>" method="POST">
                    <div class="form-group mb-3">
                        <label>Tentang</label>
                        <input type="text" class="form-control" name="judul" value="<?= $judul; ?>" required>
                        <small class="form-text text-muted">Curhat tapi jangan ghibah</small>
                    </div>

                    <div class="form-group mb-3">
                        <label>Curhat di sini</label>
                        <textarea class="form-control" name="curhat" cols="30" rows="10" required><?= $curhat; ?></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-control" name="perihal" required>
                            <option value="1">Futur</option>
                            <option value="2">Keluarga</option>
                            <option value="3">Pertemanan</option>
                            <option value="4">Pribadi</option>
                        </select>
                    </div>
                    <button name="edit" type="submit" class="btn btn-success">Ubah</button>
                </form>
            </section>
        </section>
    </section>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>
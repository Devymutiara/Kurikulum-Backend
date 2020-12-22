<?php
session_start();
if(!isset($_SESSION['status'])){
    echo null; //set null agar tidak muncul error
}else if($_SESSION['status'] == 'admin') {
    header("location: beranda_admin.php");
} else if($_SESSION['status'] == 'user') {
    header("location: beranda_user.php");
}
// if(isset($_GET['pesan'])){
//     if($_GET['pesan'] == "gagal"){
//         echo "Login gagal! username dan password salah!";
//     }else if($_GET['pesan'] == "logout"){
//         echo "Anda telah berhasil logout";
//     }	
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/stylesheet.css">
</head>

<body>
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form action="logregis_process.php" method="POST" class="form-container">
                    <h3><b> Silakan login!</b></h3>
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password" required>
                    </div>


                    <!-- <div class="py-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div> -->
                    <div class="d-grid gap-2 py-3">
                        <button name="login" type="submit" class="btn btn-primary btn-block" onclick="validasi()">Login</button>
                    </div>
                    <p>Belum punya akun? Kuy lah <a href="register.php">daftar</a> dulu!</p>
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
    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username != "" && password != "") {
                return true;
            } else {
                alert('Username dan Password harus di isi !');
                return false;
            }
        }
    </script>
</body>

</html>
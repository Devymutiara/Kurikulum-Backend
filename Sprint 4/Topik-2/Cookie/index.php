<?php 

if (isset($_COOKIE['login'])) {
    header("Location: beranda.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            margin: 160px auto;   
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <center>
        <div class="form">
            <h2>Silakan Login!</h2><br>
            <form action="login.php" method="POST">
                <ul>
                    <li><label for="username">Username :</label>
                        <input type="text" name="username" required><br><br></li>
                    <li><label for="pass">Password :</label>
                        <input type="text" name="pass" required></li><br>
                        <li><input type="checkbox" name="remember"><label for="remember">Remember me</label></li><br>
                </ul>
                <input type="reset" value="Cancel">
                <input type="submit" value="Login">
            </form>
        </div>
    </center>
</body>

</html>
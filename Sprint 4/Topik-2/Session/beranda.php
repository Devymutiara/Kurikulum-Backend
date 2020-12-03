<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a.button {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            text-decoration: none;
            color: initial;
        }
    </style>
</head>

<body style="margin: 260px auto">
    <center>
        <h1>Selamat! Anda berhasil masuk.</h1>
        <button onclick="myFunction()">Logout</button>

    </center>
    <script>
        function myFunction() {
            confirm("Anda yakin ingin keluar?");

            if (confirm() == true) {
                window.location.href = "logout.php";
            }
        }
    </script>
</body>

</html>
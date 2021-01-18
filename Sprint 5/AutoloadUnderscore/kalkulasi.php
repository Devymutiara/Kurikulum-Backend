<?php
function __autoload($class){
    require_once($class .'.php');
}

$Lingkaran = new Lingkaran;
$Persegi = new Persegi;
$Segitiga = new Segitiga;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex align-items-center vh-100 ">
        <div class="container text-center">
            <h1>Hasil kalkulasi luas<span></span></h1>
            <?php 
            if(isset($_POST['lingkaran'])){
                $radius = $_POST['radius'];
                $hasil = $Lingkaran->getArea($radius);
                echo $hasil;
            } else if(isset($_POST['persegi'])){
                $sisi = $_POST['sisi'];
                $hasil = $Persegi->getArea($sisi);
                echo $hasil;      
            } else if(isset($_POST['segitiga'])){
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];
                $hasil = $Segitiga->getArea($alas, $tinggi);
                echo $hasil;
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

spl_autoload_register(function($class){
    include $class.'.php';
});

$Kubus = new Kubus;
$LimasSegitiga = new LimasSegitiga;
$PrismaSegitiga = new PrismaSegitiga;
?>
<center>
<br><br><br>
<?php
echo "<h1>Hasil Perhitungan Volume</h1>";
if(isset($_POST['kubus'])) {
    $sisi = $_POST['sisi'];
    $Kubus->getVolume($sisi);
} else if (isset($_POST['limas'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $limas = $_POST['tinggilimas'];
    $LimasSegitiga->getVolume($alas, $tinggi, $limas);
} else if (isset($_POST['prisma'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $prisma = $_POST['tinggiprisma'];
    $PrismaSegitiga->getVolume($alas, $tinggi, $prisma);
}

?>
</center>
<?php
namespace App\Controller;

class LimasSegitiga {
    public function getVolume($alas, $tinggi, $limas) {
        $hasil = $alas * $tinggi / 2 * $limas / 3;
        echo $hasil;
    }
}
<?php
namespace App\Controller;

class Kubus {
    public function getVolume($sisi) {
        $hasil = $sisi * $sisi * $sisi;
        echo $hasil;
    }
}
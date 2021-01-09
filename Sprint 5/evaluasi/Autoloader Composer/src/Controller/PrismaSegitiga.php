<?php
namespace App\Controller;

class PrismaSegitiga {
    public function getVolume($alas, $tinggi, $prisma) {
        $hasil = $alas * $tinggi / 2 * $prisma;
        echo $hasil;
    }
}
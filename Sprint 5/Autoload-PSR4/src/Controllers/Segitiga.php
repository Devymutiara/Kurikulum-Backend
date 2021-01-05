<?php
namespace App\Controllers;

class Segitiga {

    public function getArea($alas, $tinggi) {
        echo "Luas segitiga : " . ($alas * $tinggi) / 2;
    }
}
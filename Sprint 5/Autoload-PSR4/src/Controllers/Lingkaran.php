<?php
namespace App\Controllers;

class Lingkaran {

    public $pi = 3.14;
    public function getArea($radius) {
        echo "Luas lingkaran : ". $this->pi * $radius * $radius;
    }
}
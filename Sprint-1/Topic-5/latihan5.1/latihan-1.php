<?php

echo '============================'."\n";
echo '||     Persegi Panjang    ||'."\n";
echo '============================'."\n";
echo '1. Luas'."\n".'2. Keliling'."\n";
echo 'Mau ngitung apa : ';

$pilihan = (int) trim(fgets(STDIN));

function calcRectangleArea($width, $length){
        return $result = $width*$length;
}

function keliling($width, $length) {
    return $result = 2*($width+$length);
}

if ($pilihan == 1) {
    echo "Panjang : ";
    $panjang = (int) trim(fgets(STDIN));
    echo "Lebar : ";
    $lebar = (int) trim(fgets(STDIN));
    echo '----------------------------'."\n";
    echo "Luas : ".calcRectangleArea($panjang, $lebar)."\n";
} else if ($pilihan == 2) {
    echo "Panjang : ";
    $panjang = (int) trim(fgets(STDIN));
    echo "Lebar : ";
    $lebar = (int) trim(fgets(STDIN));
    echo '----------------------------'."\n";
    echo "Keliling : ".keliling($panjang, $lebar)."\n";
} else {
    echo "Pilihan tidak ditemukan ! \n";
}
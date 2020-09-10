<?php

// $nilai = [5, 9, 6, 7, 9, 8 , 10, 7, 8];

// Input dinamis
echo "Jumlah data yang akan dimasukkan : ";
$jumlah = trim(fgets(STDIN));

for ($i=1; $i <= $jumlah; $i++) { 
    echo "Input ke-".$i." : ";
    $nilai[] = trim(fgets(STDIN));
}

rsort($nilai);

echo "\n";

for ($i=0; $i < 3; $i++) { 
    $max[] = $nilai[$i];
}
echo "Highest : ";
print_r($max);

sort($nilai);

for ($i=0; $i < 3; $i++) { 
    $min[] = $nilai[$i];
}
echo "Lowest : ";
print_r($min);
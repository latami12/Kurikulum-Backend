<?php

echo "jumlah data yang dimasukkan : ";
$nilai = (int) trim(fgets(STDIN));

var_dump($nilai);

for ($i=1; $i <= $nilai; $i++){
    echo "Input ke-". $i .": ";
    $input_nilai [] = trim(fgets(STDIN));

}
print_r($angka);   




// $data = [5, 9, 6, 7, 9, 8, 10, 7, 8.];
// sort($data);  
// print_r($data);

$nilai = [5, 9, 6, 7, 9, 8, 10, 7, 8];
print_r($nilai);
// MEAN
$mean = count($nilai);
echo "<\n>Mean : ";
print_r(array_sum($nilai)/$mean);

echo "<\n>";

//Median
sort($nilai);
// print_r($nilai);

$m = $mean/2;

if (is_double($m)) {
    $m = floor($m);
    $median = $nilai[$m];
} else {
    $m = round($m);
    $median = ($nilai[$m-1] + $nilai[$m]) / 2;
}

echo "Median : ";
print_r($median);

echo "\n";

$val = array_count_values($nilai);
arsort($val);
echo "Modus : ";
foreach ($val as $k => $v) {
    if ($v == max($val)) {
        // echo "Modus : " . $k . " Frekuensi : " . $v;
        // echo "\n";
        echo $k . ", ";
    }
}

$frekuensi = max($val);
echo "Frekuensi : " . $frekuensi;

echo "\n";
// //Modus
// $modus=array_count_values([$mean]);
// foreach ($modus as $key => $value) {
//     if ($value==max($modus) ) {
//         echo "Modusnya [$key] dengan banyak $value \n>"; 
//     }
// }
?>



















<?php

for ($i=0; $i <9 ; $i++) { 
    for ($j=0; $i < 9; $j++) { 
        if ($i%2 == 0) {
        echo '+';
        }else {
            echo '-';
        }
    }
    echo '<br>';
}

for ($i=0; $i < 9; $i++) { 
    for ($j=0; $i < 9; $j++) { 
        if ($j&2 == 1) {
            echo '+';
        }else {
            echo '-';
        }
    }
    echo '<\n>';
} 

//soal2
function 
foreach ($i as $key => $value) {
    
}


//soal3

$students[] = [
    'nama' => $nama,
    'umur' => $umur,
    'division' => $divison,
    'jurusan'=> $jurusan
];

echo '=============';
echo '===WELCOME===';
echo '=============';

echo 'Data yang ingin di inuput :';
$data = trim(fgets(STDIN));

for ($i=0; $i < $students; $i++) { 
    echo ' Nama : ';
    $data[$i]['nama'] = trim(fgets(STDIN));
    echo ' Usia : ';
    $data[$i]['usia'] = (int) trim(fgets(STDIN));
    echo ' Division : ';
    $data[$i]['division'] = trim(fgets(STDIN));
    echo ' Jurusan : ';
    $data[$i]['jurusan'] = trim(fgets(STDIN));

}
$total = $data;

foreach ($students as $value) {
    if ($value['division'] == 'backend') {
        $backend == $value['division'];
    }
    if ($value['umur'] < 25) {
        $dua5[] = $value['nama'];
    }
}
$semua[] = $value['usia'];

echo 'Daftar input division backend : ';
foreach ($backend as $value) {
    echo $value;
}
echo '<\n>';

echo 'Jumlah santri berusia kurang dari 25 : ';
foreach ($dua5 as $value) {
    echo $value.",";
}
echo '<\n>';

echo 'Santri paling muda : ';
array_multisort($semua, SORT_ASC, $students;
$min = min($semua); 

foreach ($value as $students) {
    # code...
}
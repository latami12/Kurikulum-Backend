<?php

class Rumus {
    public function __construct()
    {
        echo "===========";
        echo "|  Tugas  |";
        echo "===========";
        echo "\n";
    }
    public static function persegiPanjang($p, $l, $r){
        if ($r == "Luas") {
            return $p*$l;
        } elseif ($r == "Keliling") {
            return 2*($p+$l);
        } else {
            return "Ups!!!";
        }
    }

    public static function trapesium($a, $b, $c, $d, $t, $r){
        if ($r == "Keliling") {
            return $a+$b+$c+$d;
        } elseif ($r == "Luas") {
            return 1/2*($a+$b)*$t;
        } else {
            return "ups!!!";
        }
    }

    public static function lingkaran($r, $rumus){
        if ($rumus == "Luas") {
            return 3.14*$r**2;
        } elseif ($rumus == "Diameter") {
            return 2*$r;
        } else {
            return "ups!!!";
        }
    }
}

function Menghitung(){
    

    echo "1. Persegi Panjang \n2. Lingkaran \n3. Trapesium \n";
    echo "Pilih lah : ";
    $hasil = (int) trim(fgets(STDIN));

    if ($hasil == 1) {
        echo "Persegi Panjang \n";
        echo "Lebar : ";
        $l = (int) trim(fgets(STDIN));
        echo "Panjang : ";
        $p = (int) trim(fgets(STDIN));
        echo "---------------------- \n";
        echo "1. Keliling \n2. Luas \n";
        echo "Mau apa? \n";
        $rumus = (int) trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = "Keliling";
        } elseif ($rumus == 2) {
            $rumus = "Luas";
        } else {
            "Ups!!!";
        }

        echo $rumus.":". Rumus::persegiPanjang($p, $l, $rumus);
        echo "\n";
    } elseif ($hasil == 2) {
        echo "Lingkaran \n";
        echo "Jari-jari : ";
        $r = (int) trim(fgets(STDIN));
        echo "---------------------- \n";
        echo "1. Diameter \n2. Luas \n";
        echo "Mau apa? \n";
        $rumus = (int) trim(fgets(STDIN));

        if ($rumus == 1) {
            $rumus = "Diameter";
        } elseif ($rumus == 2) {
            $rumus = "Luas";
        } else {
            echo "Ups!!!";
        }
        echo $rumus.":". Rumus::lingkaran($r, $rumus);
    } elseif ($hasil ==3) {
        echo "Trapesium \n";
        echo "Sisi Sejajar";
        $s1 = (int) trim(fgets(STDIN));
        echo "Sisi Sejajar 2";
        $s2 = (int) trim(fgets(STDIN));
        echo "Sisi Kanan";
        $skn = (int) trim(fgets(STDIN));
        echo "Sisi Kiri";
        $skr = (int) trim(fgets(STDIN));
        echo "Tinggi";
        $t = (int) trim(fgets(STDIN));
        echo "---------------------- \n";
        echo "1. Keliling \n2. Luas \n";
        echo "Mau apa? \n";
        $rumus = (int) trim(fgets(STDIN));
        if ($rumus == 1) {
            $rumus = "Keliling";
        } elseif ($rumus == 2) {
            $rumus = "Luas";
        } else {
            echo "Ups!!!";
        }
  
        echo $rumus.":". Rumus::trapesium($s1, $s2, $skn, $skr, $t, $rumus);
        echo "\n";
    } else {
        echo "Ups...!!!";
    }

        echo "Ingin lebih? (y/n)\n";
        $lanjut = trim(fgets(STDIN));

    if ($lanjut == "y") {
        menghitung();
    }

}

menghitung();






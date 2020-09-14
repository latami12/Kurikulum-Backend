<?php
 
 echo " ==================== "."\n";
 echo " |     WELLCOME     | "."\n";
 echo " ==================== "."\n";
 echo "1. Persegi"."\n"."2. Segitiga"."\n"."3. Lingkaran"."\n"."4. Trafesium"."\n";
 echo "Mau Hitung apa ? ";
 $pilihan = (int) trim(fgets(STDIN));

 if ($pilihan == 1) {   
echo " ==================== "."\n";
echo " |      PERSEGI     | "."\n";
echo " ==================== "."\n";
echo "1. width"."\n"."2. Lenght"."\n";
echo "Mau Hitung apa ? ";
$pilihan = (int) trim(fgets(STDIN));
function Luas($p, $l){
    return $p*$l;
}
function Kelilng($p, $l){
    return ($p+$l)*2;
}
if ($pilihan == 1) {
   echo "Panjang :";
   $panjang =(int) trim(fgets(STDIN));
   echo "Lebar :";
   $lebar = (int) trim(fgets(STDIN));
   echo "Luas = ".luas($panjang, $lebar)."\n";
}elseif ($pilihan == 2) {
   echo "Panjang :";
   $panjang =(int) trim(fgets(STDIN));
   echo "Lebar :";
   $lebar = (int) trim(fgets(STDIN));
   echo "Keliling = ".Kelilng($panjang, $lebar)."\n";
}else {
 echo "Maaf Nilai Tidak Ditemukan";
}
 }elseif ($pilihan == 2) { 
    echo " ==================== "."\n";
    echo " |     SEGITIGA     | "."\n";
    echo " ==================== "."\n";
    echo "1. Luas"."\n"."2. Keliling"."\n";
    echo "Mau Hitung apa ? ";
    $pilihan = (int) trim(fgets(STDIN));
    function Luas($alas, $tinggi){
        return $alas*$tinggi;
    }
    function Kelilng($a, $b, $c){
        return $a+$b+$c;
    }
    if ($pilihan == 1) {
       echo "Alas :";
       $panjang =(int) trim(fgets(STDIN));
       echo "Tinggi :";
       $lebar = (int) trim(fgets(STDIN));
       echo "Luas = ".luas($panjang, $lebar)."\n";
   }elseif ($pilihan == 2) {
       echo "Sisi A :";
       $sisia =(int) trim(fgets(STDIN));
       echo "Sisi B :";
       $sisib = (int) trim(fgets(STDIN));
       echo "Sisi c :";
       $sisic = (int) trim(fgets(STDIN));
       echo "Keliling = ".Kelilng($sisia, $sisib, $sisic)."\n";
   }else {
   echo "Maaf Nilai Tidak Ditemukan";
  };
}elseif ($pilihan == 3) {
   echo " ==================== "."\n";
   echo " |     LINGKARAN    | "."\n";
   echo " ==================== "."\n";
   echo "1. Luas"."\n"."2. Keliling"."\n"."3. Diameter"."\n";
   echo "Mau Hitung apa ? ";
   $pilihan = (int) trim(fgets(STDIN));
   function Luas($v ,$r){
       return $v*$r*$r;
   }
   function Kelilng($d, $r, $v ){
       return $v*2*$r;
   }
   function Diameter($r, $a){
       return 2*$r;
   }
   if ($pilihan == 1) {
      echo "Nilai n :";
      $nilain =(int) trim(fgets(STDIN));
      echo "Jari-Jari :";
      $Jaja = (int) trim(fgets(STDIN));
      echo "Luas = ".luas($nilain, $Jaja)."\n";
   }elseif ($pilihan == 2) {
      echo "Nilai n :";
      $nilan =(int) trim(fgets(STDIN));
      echo "Jari-jarii :";
      $Jari_jarii = (int) trim(fgets(STDIN));
      echo "Keliling = ".Kelilng($nilan, $Jari_jarii, 2)."\n";
   }elseif ($pilihan == 3) {
       echo "Jari-jari :";
       $Jari_jar =(int) trim(fgets(STDIN));
       echo "Diameter = ".Diameter($Jari_jar, 2)."\n";
   }else {
      echo "Maaf Nilai Tidak Ditemukan";
   };
}elseif ($pilihan == 4) {
   echo " ==================== "."\n";
   echo " |     TRAFESIUM    | "."\n";
   echo " ==================== "."\n";
   echo "1. Luas"."\n"."2. Keliling"."\n";
   echo "Mau Hitung apa ? ";
   $pilihan = (int) trim(fgets(STDIN));
   function Luas($ss, $sss, $t){
    return $ss+$sss*$t/2;
   } function Kelilng($a, $b, $c, $d){
    return $a+$b+$c+$d;
   }if ($pilihan == 1) {
   echo "Sisi Sejajar A :";
   $sisia =(int) trim(fgets(STDIN));
   echo "Sisi Sejajar B :";
   $sisib = (int) trim(fgets(STDIN));
   echo "Tinggi :";
   $tinggi = (int) trim(fgets(STDIN));
   echo "Luas = ".luas($sisia, $sisib, $tinggi, 2)."\n";
   }elseif ($pilihan == 2) {
   echo "Sisi A :";
   $sisia =(int) trim(fgets(STDIN));
   echo "Sisi B :";
   $sisib = (int) trim(fgets(STDIN));
   echo "Sisi C :";
   $sisic = (int) trim(fgets(STDIN));
   echo "Sisi D :";
   $sisid = (int) trim(fgets(STDIN));
   echo "Keliling = ".Kelilng($sisia, $sisib, $sisic, $sisid)."\n";
   }else {
   echo "Maaf Nilai Tidak Ditemukan";
   }
}else {  
   echo "Maaf tidak ditemukan";
}
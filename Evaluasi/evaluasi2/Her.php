<?php

class Register {
    
    function __construct() {
        echo "============================== \n";
        echo "    Pendaftaran Santri Baru    \n";
        echo "============================== \n";
    }

    protected static $murid = [
        [
            'name' => 'Rahmat',
            'nik' => 'T001'
        ]
    ];

}

class Santri extends Register {

    public static function tambah() {
        echo "Nama : ";
        $nama = trim(fgets(STDIN));
        echo "NIK : ";
        $nik = trim(fgets(STDIN));
        $santri = [
            'name' => $nama, 
            'nik' => $nik
        ];

        self::$murid[] = $santri;
        print_r(self::$murid);
    }

    public static function update() {
            for ($i=0; $i < count(self::$murid); $i++) { 
                echo $i . " - " . self::$murid[$i]['nik'] . " " . self::$murid[$i]['name'] . "\n";
            }

            echo "------------------------------ \n";

            echo "Pilih data yang diupdate : ";
            $update = (int) trim(fgets(STDIN));

            echo "------------------------------ \n";

            if ($update >= count(self::$murid)) {
                echo "Data tidak falid!!! \n";
            } else {
                echo "Nama : ";
                self::$murid[$update]['name'] = trim(fgets(STDIN));
                echo "NIK : ";
                self::$murid[$update]['nik'] = trim(fgets(STDIN));
                print_r(self::$murid);
            }
    }

    public static function delete() {
        for ($i=0; $i < count(self::$murid); $i++) { 
            echo self::$murid[$i]['nik'] . " - " . self::$murid[$i]['name'] . "\n";
        }

        echo "pilih nik yang ingin di hapus : ";
        $val = trim(fgets(STDIN));

        foreach (self::$murid as $k => $v) {
            if ($v['nik'] == $val) {
                unset(self::$murid[$k]);
                print_r(self::$murid);
            } else {
                echo "Data tidak falid!!! \n";
            }
        }
    }

}


function Start() {
    $start = new Register();

    echo "1. Tambah \n2. Update \n3. Delete \n";
    echo "Mau Ngapain ? ";
    $pilih = (int) trim(fgets(STDIN));

    if ($pilih == 1) {
        echo "----------------- \n";
        echo "      Tambah      \n";
        echo "----------------- \n";
        Santri::tambah();
    } else if ($pilih == 2) {
        echo "----------------- \n";
        echo "      Update      \n";
        echo "----------------- \n";
        Santri::update();
    } else if ($pilih == 3) {
        echo "----------------- \n";
        echo "      Delete      \n";
        echo "----------------- \n";
        Santri::delete();
    } else {
        echo "Data tidak falid!!! \n";
    }

    echo "Jalankan lagi ? (y/n) ";
    $yepora = trim(fgets(STDIN));
    if ($yepora == 'y') {
        Start();
    }
}

Start();
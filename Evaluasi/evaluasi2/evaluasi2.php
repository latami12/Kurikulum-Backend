<?php

// class Register{
//     protected $santri;

//     public static function santri($i){
//         self::santri($i);
//         return  self::santri($i);
//     }
// }
// $i = new Register();
// echo $i->santri($i);


class Register
{   
    protected $santri = [
        'name' => "Arief",
        'nik' => "T001"
    ];
    // private $santri =
    // [
    //   [
    //     'name' => "Arief",
    //     'nik'  => "TOO1"
    //   ]
    // ];
    
    public static function insertStudent(array $santri): void
    {
        $santri[1] = [
            'name' => "Rahmat",
            'nik' => "T002"
        ];
        $santri2[] = [
            'name' => "Latami",
            'nik'  => "T003"
        ];
        foreach ($santri as $santri2) {
            sort($santri2);
            echo $santri2;
        }
        unset($santri[0]);
        print_r($santri);
    }

    public function __construct()
    {
        echo "------------------- \n";
        echo "|   DATA SANTRI   | \n";
        echo "------------------- \n";
    }

}

$santi = new Register();
echo Register::insertStudent(['name' => 'Rahmat', 'nik' => 'T002']);
echo Register::insertStudent(['name' => 'Latami', 'nik' => 'T003']);
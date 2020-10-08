<?php
namespace Src;

class Segitiga{
    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function luas(){
        return 1/2 * $this->alas * $this->tinggi;
    }
}
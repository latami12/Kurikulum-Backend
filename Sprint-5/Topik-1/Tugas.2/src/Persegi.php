<?php
namespace Src;
class Persegi{
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }
    public function luas(){
        return $this->panjang * $this->lebar;
    }
    public function keliling(){
        return ($this->panjang + $this->lebar) * 2;
    }
}
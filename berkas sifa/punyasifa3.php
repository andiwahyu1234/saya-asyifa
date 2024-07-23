<?php

<lass Hapebaru{
    public $brand;
    public $tahun

    public function get_brand{}{
         return "Mobil dengan brand " ,$this->brand
    }
}
    // Instansiasi objek dan pengaturan properti
    $infinix = new Hapebaru; // infinik merupakan sebuah objek yang berisi dari class Hspebsru
    $infinix->brand = "Infinix";
    $infinix->tahun = "2015";

    // Mencetak informasi objek
    echo "<pre>";
    print_r (infinix);
    echo "</pre>";

    echo "<br>";
    echo $infinix->brand;
    echo "<br>";
    echo $inifinix->tahun
    echo "<br>";
    echo $infinix->get_brand();
<?php

define('NAMA', 'Naek Benhoven Butarbutar');
echo NAMA;

echo "<br>";

const UMUR = 18;
echo UMUR;

class Coba
{
    const NAMA = 'Naek Benhoven Butarbutar';
}

echo Coba :: NAMA;

ECHO __LINE__;

// function Coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

// class Coba
// {
//     public $kelas = __CLASS__;
// }

// $obj = new Coba;
// echo $obj -> kelas;
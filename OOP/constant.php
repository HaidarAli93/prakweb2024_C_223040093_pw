<?php

define('NAMA', 'Sandhika Galih');

echo NAMA;
echo "<br>";

const UMUR = 32;

echo UMUR;
echo "<br>";

class Coba {
	const NAMA = 'Sandhika';
}

echo Coba::NAMA;
echo "<br>";

echo __LINE__;
echo "<br>";

function coba() {
	return __FUNCTION__;
}

echo coba();
echo "<br>";

class Coba2 {
	public $kelas = __CLASS__;
}

$obj = new Coba2;
echo $obj->kelas;
echo "<br>";
?>

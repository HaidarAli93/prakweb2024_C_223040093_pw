<?php

class ContohStatic {
	public static $angka = 1;

	public static function halo() {
		return "Halo " . self::$angka++ . " kali.";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<br>";


class Contoh {
	public static $angka = 1;

	public function halo() {
		return "Halo " . self::$angka++ . " kali. <br>";
	}
}

$obj1 = new Contoh();
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>

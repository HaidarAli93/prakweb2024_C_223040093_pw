<?php

class Produk {
	public $judul,
		$penulis,
		$penerbit,
		$harga;

	public function __construct( $judul = "judul", $penulis = "penulis",
		$penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if ($this->tipe == "Komik" ) {
			$str .= " ~ {$this->jmlHal} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " ~ {$this->wktMain} Jam.";
		}

		return $str;
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk {
	public $jmlHal;

	public function __construct( $judul = "judul", $penulis = "penulis",
		$penerbit = "penerbit", $harga = 0, $jmlHal = 0) {
		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->jmlHal = $jmlHal;
	}

	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlHal} Halaman.";
		return $str;
	}
}
	
class Game extends Produk {
	public $wktMain;

	public function __construct( $judul = "judul", $penulis = "penulis",
		$penerbit = "penerbit", $harga = 0, $wktMain = 0) {
		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->wktMain = $wktMain;
	}

	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->wktMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, "Komik");
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
?>

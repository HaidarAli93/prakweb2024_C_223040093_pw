<?php

class Produk {
	private $judul,
		$penulis,
		$penerbit,
		$harga;

	protected $diskon;

	public function __construct( $judul = "judul", $penulis = "penulis",
		$penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setHarga( $harga ) {
		$this->harga = $harga;
	}
	
	public function getHarga() {
		return $this->harga - ($this->harga*$this->diskon/100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
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
		$str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHal} Halaman.";
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
	
	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->wktMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";

		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, "Komik");
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";

$produk1->setPenulis("Sandhika Galih");
echo $produk1->getPenulis();
echo "<br>";
?>

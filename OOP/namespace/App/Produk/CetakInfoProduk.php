<?php

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk($produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $produk) {
			$str .= "~ {$produk->getInfoProduk()} <br>";
		}

		return $str;
	}
}

?>

<?php 

class Produk{
	public $judul ="judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new Produk();
// $produk1->judul = "Jujutsu Kaisen";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Jujutsu Kaisen";
$produk3->penulis ="Gege Akutami";
$produk3->penerbit = "Shueisha";
$produk3->harga = 40000;

$produk4 = new Produk();
$produk4->judul = "Epic Treasure";
$produk4->penulis = "Fauzan Oziadam";
$produk4->penerbit = "Ricardo Larrea";
$produk4->harga = 100000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();










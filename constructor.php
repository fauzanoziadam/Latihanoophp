<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0 ) {
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;

		   }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

$produk1 = new Produk("Jujutsu Kaisen","Gege Akutami", "Shueisha", 40000);
$produk2 = new Produk("Epic Treasure", "Fauzan Oziadam", "Ricardo Larrea", 100000);
$produk3 = new Produk("Bounty Rush");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);










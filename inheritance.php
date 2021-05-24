<?php 

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHal,
		   $waktuMain;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0, $jmlHal =0, $waktuMain = 0){
		   	$this->judul = $judul;
		   	$this->penulis = $penulis;
		   	$this->penerbit = $penerbit;
		   	$this->harga = $harga;
		   	$this->jmlHal = $jmlHal;
		   	$this->waktuMain = $waktuMain;
		   }

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		// Komik : Jujutsu Kaisen | Gege Akutami, Shueisha (Rp.40000) - 75 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}



class Komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} - {$this->jmlHal} Halaman.)";
		return $str;
	}
}


class Game extends Produk{
	public function getInfoProduk(){
		$str = "Game {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} - {$this->waktuMain} Jam.)";
		return $str;
	}
}


class CetakInfoProduk{
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Jujutsu Kaisen","Gege Akutami", "Shueisha", 40000, 100, 0);
$produk2 = new Game("Epic Treasure", " Fauzan Oziadam", "Ricardo Larrea", 100000, 0, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




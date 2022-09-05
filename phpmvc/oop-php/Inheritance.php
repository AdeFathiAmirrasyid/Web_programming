<?php



class Product
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000, $jmlHalaman = 100, $waktuMain = 50)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLable()
  {
    return "$this->penulis , $this->penerbit";
  }

  public function getInfoProduct()
  {
    $str = ("{$this->judul} | {$this->getLable()} (Rp.{$this->harga})");
    return $str;
  }
}

class CetakInfoProduct
{
  public function cetak(Product $product)
  {
    $str = ("{$product->judul} | {$product->penulis} , {$product->penerbit} : (Rp : $product->harga)");
    return $str;
  }
}

//  Inheritance

class Komik extends Product
{
  public function getInfoProduct()
  {
    $str = ("Komik : {$this->judul} | {$this->getLable()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.");
    return $str;
  }
}

class Game extends Product
{
  public function getInfoProduct()
  {
    $str = ("Game : {$this->judul} | {$this->getLable()} (Rp.{$this->harga}) ~ {$this->waktuMain} Jam.");
    return $str;
  }
}

$product1 = new Komik("One Piece", "Eiichiro Oda", "Shonen Jump", 30000, 100, 0);
$product2 = new Game("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 200000, 0, 50);


echo  $product1->getInfoProduct();
echo  "<br>";
echo  $product2->getInfoProduct();

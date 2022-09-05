<?php


class Product
{
  public
    $judul,
    $penulis,
    $penerbit;

   protected  $diskon = 0;
   private $harga;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }


  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
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



class CetakInProduct
{
  public function getInfoProduct(Product $product)
  {
    $str = ("{$product->judul} | {$product->penulis} , {$product->penerbit} : (Rp : $product->harga)");
    return $str;
  }
}

//  Inheritance

class Komik extends Product
{
  public $jmlHalaman;
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000, $jmlHalaman = 10)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduct()
  {
    $str = ("Komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman.");
    return $str;
  }
}

class Game extends Product
{
  public $waktuMain;
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000, $waktuMain = 10)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }
  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }

  public function getInfoProduct()
  {
    $str = ("Game : " . parent::getInfoProduct() . " ~ {$this->waktuMain} Jam.");
    return $str;
  }

}

$product1 = new Komik("One Piece", "Eiichiro Oda", "Shonen Jump", 30000, 100);
$product2 = new Game("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 1000_000, 50);


echo  $product1->getInfoProduct();
echo  "<br>";
echo  $product2->getInfoProduct();
echo  "<hr>";

$product2->setDiskon(90); 
echo $product2->getHarga();



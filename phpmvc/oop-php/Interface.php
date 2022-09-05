<?php


interface InfoProduct
{
  public function getInfoProduct();
}
abstract class Product
{
  protected
    $judul,
    $penulis,
    $penerbit,
    $harga;

  protected  $diskon = 0;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function setJudul($judul)
  {
    return $this->judul = $judul;
  }
  public function getJudul()
  {
    return $this->judul;
  }
  public function setPenulis($penulis)
  {
    return $this->penulis = $penulis;
  }
  public function getPenulis()
  {
    return $this->penulis;
  }
  public function setPenerbit($penerbit)
  {
    return $this->penerbit = $penerbit;
  }
  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  public function getLable()
  {
    return "$this->penulis , $this->penerbit";
  }

  abstract public function getInfo();
}



class CetakInProduct
{
  public $daftarProduct = [];

  public function tambahProduct(Product $product)
  {
    $this->daftarProduct[] = $product;
  }
  public function cetak()
  {
    $str =  "DAFTAR PRODUK : <br>";
    foreach ($this->daftarProduct as $p) {
      $str .= "- {$p->getInfoProduct()} <br>";
    }
    return $str;
  }
}

//  Inheritance

class Komik extends Product implements InfoProduct
{
  public $jmlHalaman;
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000, $jmlHalaman = 10)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduct()
  {
    $str = ("Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.");
    return $str;
  }
  public function getInfo()
  {
    $str = ("{$this->judul} | {$this->getLable()} (Rp.{$this->harga})");
    return $str;
  }
}

class Game extends Product implements InfoProduct
{
  public $waktuMain;
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000, $waktuMain = 10)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getInfoProduct()
  {
    $str = ("Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.");
    return $str;
  }
  public function getInfo()
  {
    $str = ("{$this->judul} | {$this->getLable()} (Rp.{$this->harga})");
    return $str;
  }
}

$product1 = new Komik("One Piece", "Eiichiro Oda", "Shonen Jump", 30000, 100);
$product2 = new Game("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 1000_000, 50);

$cetakProduct = new CetakInProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();



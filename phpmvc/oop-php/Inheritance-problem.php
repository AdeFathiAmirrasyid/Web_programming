<?php

use Product as GlobalProduct;

class Product
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $type;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000,$jmlHalaman = 100,$waktuMain = 50,$type = "type")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->type = $type;
  }

  public function getLable()
  {
    return $this->penulis.$this->penerbit;
  }

  public function cetakInfoLengkap(){
    $str = ("{$this->type} : {$this->judul} | {$this->getLable()} (Rp.{$this->harga})");
    if("{$this->type}" === "Komik"){
      $str .= (" - {$this->jmlHalaman} Halaman ");
    }else{
      $str .= (" ~ {$this->waktuMain} Jam");
    }
    return $str;
  }
}


class CetakInProduct
{
  public function cetak(Product $product)
  {
    $str = ("{$product->judul} | {$product->penulis} , {$product->penerbit} : (Rp : $product->harga)");
    return $str;
  }
}

$product1 = new Product("One Piece", "Eiichiro Oda", "Shonen Jump", 30000,100,0,"Komik");
$product2 = new Product("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 200000,0,50, "Game");


echo  $product1->cetakInfoLengkap();
echo  "<br>";
echo  $product2->cetakInfoLengkap();

 
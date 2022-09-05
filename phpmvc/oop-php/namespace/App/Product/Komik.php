<?php
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
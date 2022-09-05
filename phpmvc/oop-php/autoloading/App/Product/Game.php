<?php
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
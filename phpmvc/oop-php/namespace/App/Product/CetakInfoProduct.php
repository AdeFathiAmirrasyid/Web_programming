<?php
class CetakInfoProduct
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
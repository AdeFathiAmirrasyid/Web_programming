<?php
class Product
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 10000)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLable()
  {
    return $this->penulis;
  }
}


class CetakInProduct{
  public function cetak(Product $product){
    $str = ("{$product->judul} | {$product->penulis} , {$product->penerbit} : (Rp : $product->harga)");
    return $str;
  }
}



$product1 = new Product("One Piece", "Eiichiro Oda", "Shonen Jump", 30000);
$product2 = new Product("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 200000);


echo $product1->getLable();
echo "<hr>";
echo $product2->getLable();
echo "<hr>";

$infoCetak = new CetakInProduct();
echo $infoCetak->cetak($product1);

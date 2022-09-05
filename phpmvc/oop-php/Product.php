<?php
class Product
{
  public $judul = "judul",
         $penulis = "penulis",
         $penerbit = "penerbil",
         $harga = 0;

  public function getLable(){
 
    return $this->penulis;
  }
}
// $product1 = new Product();
// $product1->judul = "One Piece";
// var_dump($product1);


$product2 = new Product();
$product2->judul = "One Piece";
$product2->penulis = "Eiichiro Oda";
$product2->penerbit = "Shonen Jump";
$product2->harga = 30000;

$product3 = new Product();
$product3->judul = "Mobile legends";
$product3->penulis = "Hamba Allah swt";
$product3->penerbit = "Hamba Allah swt part 2";
$product3->harga = 200000;

// var_dump($product2);
echo"Komik : $product2->penulis";
echo "<br>";
echo $product2->getLable();
echo "<hr>";
echo "Komik : $product3->penulis";
echo "<hr>";
echo $product3->getLable();

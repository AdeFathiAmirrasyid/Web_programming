<?php



require_once "App/init.php";


// $product1 = new Komik("One Piece", "Eiichiro Oda", "Shonen Jump", 30000, 100);
// $product2 = new Game("Mobile legends", "Hamba Allah swt", "Hamba Allah swt part 2", 1000_000, 50);

// $cetakProduct = new CetakInfoProduct();
// $cetakProduct->tambahProduct($product1);
// $cetakProduct->tambahProduct($product2);
// echo $cetakProduct->cetak();
// echo "<hr>";

use App\Product\User as productUser;
use App\Service\User as serviceUser;

new productUser();
echo "<br>";
new serviceUser();




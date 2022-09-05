<?php
class ContohStatic{
  public static  $angka = 1;
  public  function hello(){
    return "hello world " . self::$angka++ . " kali. <br>";
  }
}

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hello();

echo "<hr>";

$obj = new ContohStatic();
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();
echo "<hr>";
$obj2 = new ContohStatic();
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();


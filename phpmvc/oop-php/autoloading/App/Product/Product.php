<?php
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




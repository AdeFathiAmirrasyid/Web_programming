<?php 
  require "functions.php";

  // Ambil id dari URL
  $id = $_GET["id"];

  // query mahasiswa berdasarkan id
  $mhs =  query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h1>Detail Mahasiswa</h1>

  <ul>
    <li><img src="img/<?= $mhs["gambar"]; ?>" width="100" height="100" alt=""></li>
    <li>NRP     : <?= $mhs["nrp"]; ?></li>
    <li>Nama    : <?= $mhs["nama"]; ?></li>
    <li>Email   : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
  </ul>
</body>
</html>
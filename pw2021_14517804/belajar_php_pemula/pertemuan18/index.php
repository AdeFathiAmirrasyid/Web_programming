<?php 
session_start();
if( !isset($_SESSION["login"])){
    header("location: login.php");
}
require "functions.php";

// pagination
// konfigurasi

$jumlahDataPerhalaman = 1;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData =  ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerhalaman");

// tombol  cari  ditekan 
if( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
    <body>

        <a href="logout.php">Logout</a>
        <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php">Tambah data mahasiswa</a>
        <br><br>

        <form action="" method="post">
            <input type="text" name="keyword" size="40" placeholder="search"  autocomplete="off" autofocus >
            <button type="submit" name="cari">Cari!</button>
        </form>
         <br><br>

        <!-- Navigasi -->
        <?php if( $halamanAktif > 1) :  ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if( $i == $halamanAktif) : ?>
                <a href="?halaman= <?= $i; ?>" style="font-weight: bold; color : brown"><?= $i; ?></a>
            <?php else :  ?>
                <a href="?halaman= <?= $i; ?>"><?= $i; ?></a>
             <?php endif;  ?>
        <?php endfor; ?>

        <?php if( $halamanAktif < $jumlahHalaman) :  ?>
             <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>


        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"]; ?>" width="50" height="50">
                </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>  
    </body>
</html>
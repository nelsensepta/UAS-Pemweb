<?php

include 'koneksi.php';

 $nama = $_POST['nama'];
 $stok = $_POST['stok'];
 $harga = $_POST['harga'];
 $jenis_barang = $_POST['jenis_barang'];

 $sql = "INSERT INTO barang (id_barang, nama, stok, harga, jenis_barang) VALUES (null, '$nama',
'$stok', '$harga', '$jenis_barang')";

 if (mysqli_query($mysqli, $sql)) {
  header('Location: index.php');
 } else {
 echo "Error: " . mysqli_error($mysqli);
 }
 
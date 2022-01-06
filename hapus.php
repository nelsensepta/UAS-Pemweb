<?php
require 'koneksi.php';

$id_barang = $_GET['id_barang'];
$sql = "DELETE FROM barang WHERE id_barang = " . $id_barang;

mysqli_query($mysqli, $sql);

if (mysqli_affected_rows($mysqli) > 0) {
  echo "<script> alert('Berhasil mengahapus data!');
  document.location.href = 'index.php';
  </script>"; 
   } else {
    echo "<script> alert('Gagal mengapus data!');
    document.location.href = 'index.php';
    </script>"; 
   }
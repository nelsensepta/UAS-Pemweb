 <?php
include 'koneksi.php';

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$jenis_barang = $_POST['jenis_barang'];

$sql = "UPDATE barang SET nama = '$nama', stok = '$stok', harga = '$harga', jenis_barang = '$jenis_barang' WHERE id_barang = '$id_barang'";
 $data = mysqli_query($mysqli, $sql);
 if (mysqli_affected_rows($mysqli) > 0) {
 echo "<script> alert('Berhasil mengupdate data!');
 document.location.href = 'index.php';
 </script>";
 } else {
echo  "<script> alert('Data Tidak Ada yang Di update!');
document.location.href = 'index.php';
</script>";
 }
 
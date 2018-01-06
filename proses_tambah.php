<?php
//koneksi
include "koneksi.php";

//menyimpan data post dari halaman input
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
$query = "insert into produk values (null ,'$nama' ,'$harga' ,'$jenis' ,'$stok' ,'$gambar')";
$hasil_query = mysqli_query($koneksi, $query);

//memeriksa apakah penambahan berhasil atau tidak.
echo "pesan : ";
if($hasil_query == true){
	echo "<div style='color:green;'>";
	echo "<b>berhasil memasukan data</b>";
	echo "</div>";
} else {
	echo "<div style='color:red;'>";
	echo "<b>gagal menasukan data</b>";
	echo "</div>";
}
//mengembalikan ke halaman awal admin
header( "Refresh:2; url=admin.php", true, 303);
?>
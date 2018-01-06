<h1>Halaman Proses Ubah Data</h1>
<?php
	include "koneksi.php";

	$id     =$_POST['id'];
	$nama	=$_POST['nama'];
	$harga	=$_POST['harga'];
	$jenis	=$_POST['jenis'];
	$stok	=$_POST['stok'];
	$gambar	=$_POST['gambar'];

	//query update data
	$query = "UPDATE produk SET nama='$nama', $harga='$harga', jenis='jenis', stok='stok', gambar='gambar' WHERE id = '$id'";
	$hasil = mysqli_query($koneksi, $query);

	if($hasil == true) {
		echo "proses tambah data berhasil";
		header("Refresh:0; url=admin.php",true,303);
	} else {
		echo "gagal menghapus data";
	}
?>
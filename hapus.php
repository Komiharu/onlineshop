<h1>Proses Hapus</h1>
<?php
	//mengambil nilai id dari url
	$id =$_GET['id'];

	//menampilkan nilai id dari url
	echo "hapus data dengan id = $id <br>";

	//query hapus data
	include "koneksi.php";

	$query = "delete from produk where id = '$id'";
	$hasil = mysqli_query($koneksi,$query);

	if($hasil == true) {
		echo "<b>Berhasil menghapus data dengan id = $id!</b><br>";
	} else {
		echo "<b>Gagal menghapus data dengan id = $id!</b><br>";
	}
	?>
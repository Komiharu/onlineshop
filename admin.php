<?php 
	//meng-include file koneksi.php
	//sehingga file admin.php juga dapat terkoneksi
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin Onlineshop</title>
</head>
<body bgcolor="blue">
 
<!-- Membuat tabel -->
<table border="3" cellpadding="5" cellspacing="5" width="100%">
<tr>
	<td>ID</td>
	<td>Nama Produk</td>
	<td>Harga</td>
	<td>Jenis</td>
	<td>Stok</td>
	<td>Gambar</td>
</tr>

<!--mulai script php untuk mengambil data dari database-->
<?php
	//query yang akan kita eksekusi
	$query = "SELECT * from produk";

	//mengeksekusi query dengan koneksi yang telah kita buat
	$hasil_query = mysqli_query($koneksi, $query);

	//melakukan pengambilan data secara berulang (baris per baris)
	while ($data = mysqli_fetch_array($hasil_query)) {
		//data yang didapat dari database berbentuk array
		$id		= $data['id'];
		$nama	= $data['nama'];
		$harga	= $data['harga'];
		$jenis	= $data['jenis'];
		$stok	= $data['stok'];
		$gambar	= $data['gambar'];

		//mencetak baris dalam tabel
		echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$nama</td>";
			echo "<td>Rp$harga,00</td>";
			echo "<td>$jenis</td>";
			echo "<td>$stok</td>";
			echo "<td><img src='$gambar' width='100'></td>";

			echo "<td><a href='ubah.php?id=$id'><button>edit</button></a></td>";
			echo "<td><a href='hapus.php?id=$id'><button>delete</button></a></td>";
		echo "</tr>";
	}
?>

<tr>
	<td colspan="8" align="right"><a href="tambah.php"><button>Tambah Data</button></a></td>
</tr>
</body>
</html>
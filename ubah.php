<h1>Halaman Ubah Data</h1>

<?php
	//include koneksi
	include "koneksi.php";

	$id = $_GET['id'];

	echo "Mengubah data dengan id = $id";

	//Mengambil data dengan id $id
	$query = "SELECT * from produk where id = $id";
	$hasil = mysqli_query($koneksi, $query);
	$data  = mysqli_fetch_array($hasil);

	$nama	= $data['nama'];
	$harga	= $data['harga'];
	$jenis	= $data['jenis'];
	$stok	= $data['stok'];
	$gambar	= $data['gambar'];

echo "
<pre>
<form action='proses_ubah.php' method='post'>
<input type='hidden' name='id' value='$id'>
Nama   : <input type='text' name='nama' value='$nama'> <br>
Harga   : <input type='number' name='harga' value='$harga'> <br>
Jenis   : <input type='text' name='jenis' value='$jenis'> <br>
Stok   : <input type='number' name='stok' value='$stok'> <br>
Gambar   : <input type='text' name='gambar' value='$gambar'> <br>
<input type='submit' name='submit' value='Ubah'>
</from>
</pre>
";

?>
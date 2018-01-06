<html>
<head><title>Tambah data</title></head>
<body>
<h2>Halaman Tambah Data</h2>
<form action="proses_tambah.php" method="post">
	<table border="7" cellpadding="5" cellspacing="5" width="100%">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama Produk"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga" placeholder="Harga"></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>
				<select name="jenis">
					<option>Matic</option>
					<option>Sport</option>
					<option>Bebek</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="number" name="stok" placeholder="Jumlah stok"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="text" name="gambar" placeholder="link gambar"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="" value="Tambah Data"></td>
		</tr>
	<table>
</form>
</body>
</html>
						
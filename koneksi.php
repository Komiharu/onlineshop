<?php
	//membuat koneksi ke database
	$server		= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "onlineshop";

	//mengoneksikan ke database mysql pada server localhost.
	$koneksi = mysqli_connect($server,$user,$password,$database);

	//memeriksa apakah koneksi berhasil atau gagal
	echo "<marquee>HANICKNAME</marquee>";
	echo "Status Koneksi";
	if($koneksi == true) {
		echo "<div style ='color:green;'>";
		echo "<b>database berhasil terkoneksi</b>";
		echo "</div>";
	} else {
		echo "<div style ='color:red;'>";
		echo "<b>database tidak dapat terkoneksi</b>";
		echo "</div>";
	}
?>
<?php 
require 'koneksi.php';
$id = $_GET['id'];
$gbr = $_GET['gbr'];
$tbh = mysqli_query($koneksi,"DELETE FROM tb_tas WHERE idtas = $id");

	if (!$tbh) {
		echo "GAGAL";
	} else { 
		unlink("gambar/$gbr");
		echo "BERHASIL";
		echo '<meta http-equiv="refresh" content="1; url=inputtas.php">';
	}
?>
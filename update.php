<?php
	include 'koneksi.php';
	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];

	$result = "UPDATE list SET kode = '$kode',nama = '$nama',deskripsi = '$deskripsi',stok = '$stok',harga = '$harga',berat = '$berat' WHERE id = '$id'";
	$sql = mysqli_query($conn,$result);
	if ($sql) {
		header("location: index.php");
	}
?>
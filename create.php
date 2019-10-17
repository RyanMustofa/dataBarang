<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="create.php" method="post">
		<table>
			<tr>
				<td>id : </td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Kode : </td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Deskripsi : </td>
				<td><textarea name="deskripsi"></textarea></td>
			</tr>
			<tr>
				<td>Stok : </td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td>Harga : </td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Berat : </td>
				<td><input type="text" name="berat">gram</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="tambah"></td>
			</tr>
		</table>
		<a href="index.php">lihat</a>
	</form>
</body>
</html>
<?php
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$deskripsi = $_POST['deskripsi'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$berat = $_POST['berat'];

		$daftar = "INSERT into list VALUES('$id','$kode','$nama','$deskripsi','$stok','$harga','$berat')";
		$sql = mysqli_query($conn,$daftar);
	}
?>
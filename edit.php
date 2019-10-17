<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$daftar = "SELECT * from list WHERE id = '$id'";
	$sql = mysqli_query($conn,$daftar);
	$row = mysqli_fetch_array($sql);
	$id = $row['id'];
	$kode = $row['kode'];
	$nama = $row['nama'];
	$deskripsi = $row['deskripsi'];
	$stok = $row['stok'];
	$harga = $row['harga'];
	$berat = $row['berat'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>id : </td>
				<td><input type="text" name="id" value="<?php echo $id ?>"readonly></td>
			</tr>
			<tr>
				<td>Kode : </td>
				<td><input type="text" name="kode" value="<?php echo $kode ?>"></td>
			</tr>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi : </td>
				<td><textarea name="deskripsi"><?php echo $deskripsi ?></textarea></td>
			</tr>
			<tr>
				<td>Stok : </td>
				<td><input type="text" name="stok" value="<?php echo $stok ?>"></td>
			</tr>
			<tr>
				<td>Harga : </td>
				<td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
			</tr>
			<tr>
				<td>Berat : </td>
				<td><input type="text" name="berat" value="<?php echo $berat ?>">gram</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="tambah"></td>
			</tr>
		</table>
		<a href="index.php">lihat</a>
	</form>
</body>
</html>
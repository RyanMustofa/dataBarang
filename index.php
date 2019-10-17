<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="create.php">add</a>
	<table border="3 ">
	<tr>
		<th>id</th>
		<th>kode</th>
		<th>nama</th>
		<th>harga</th>
		<th>aksi</th>
	</tr>
	<tr>
		<?php
			include 'koneksi.php';
			$result = "SELECT * from list";
			$sql = mysqli_query($conn,$result);
			while ($row = mysqli_fetch_array($sql)) {
				echo "<tr>
				<td>$row[id]</td>
				<td>$row[kode]</td>
				<td>$row[nama]</td>
				<td>$row[harga]</td>
				<td><a href='edit.php?id=$row[id]'>edit</a> | <a href='delete.php?id=$row[id]'>delete</a></td>
				</tr> ";
			}
		?>
	</tr>
	</table>
</body>
</html>
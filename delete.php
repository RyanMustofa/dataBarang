<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$result = "DELETE from list WHERE id = '$id'";
	$sql = mysqli_query($conn,$result);
	if ($sql) {
		header("location: index.php");
	}
?>
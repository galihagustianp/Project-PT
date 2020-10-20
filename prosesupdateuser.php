<?php
	include 'koneksi.php';

	$ID_Userlama = $_GET['ID_User'];
	$ID_User = $_GET['ID_User'];
	$Nama_User = $_POST['Nama_User'];
	$Bagian = $_POST['Bagian'];

	$query=mysqli_query($koneksi,"UPDATE user SET ID_User='$ID_User', Nama_User='$Nama_User', Bagian='$Bagian' WHERE ID_User='$ID_Userlama' ") or die(mysql_error($koneksi));

	if ($query) {
		header("Location: datauser.php");
	}else{
		echo "Gagal";
	}

?>
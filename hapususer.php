<?php 
	include 'koneksi.php';
	$ID_User=$_GET['ID_User'];

	$query =mysqli_query($koneksi,"DELETE FROM user WHERE ID_User='$ID_User'") or die(mysqli_error($koneksi));

	if ($query){
		header("Location: datauser.php");
	}else{
		echo "Gagal";
	}
 ?>
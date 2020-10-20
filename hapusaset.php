<?php 
	include 'koneksi.php';
	$ID_Aset=$_GET['ID_Aset'];

	$query =mysqli_query($koneksi,"DELETE FROM aset WHERE ID_Aset='$ID_Aset' ") or die(mysqli_error($koneksi));

	if ($query){
		header("Location: dataaset.php");
	}else{
		echo "Gagal";
	}
 ?>
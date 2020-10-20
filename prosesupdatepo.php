<?php
	include 'koneksi.php';

	$ID_Polama = $_GET['ID_Po'];
	$ID_Po = $_GET['ID_Po'];
	$No_Po = $_POST['No_Po'];
	$Date_Po = $_POST['Date_Po'];

	$query=mysqli_query($koneksi,"UPDATE po SET ID_Po='$ID_Po', No_Po='$No_Po', Date_Po='$Date_Po' WHERE ID_Po='$ID_Polama' ") or die(mysql_error($koneksi));

	if ($query) {
		header("Location: datapo.php");
	}else{
		echo "Gagal";
	}

?>
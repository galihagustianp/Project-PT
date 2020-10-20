<?php
	include 'koneksi.php';
	$ID_Asetlama = $_GET['ID_Aset'];
	$ID_Aset = $_GET['ID_Asst'];
	$NoAset=$_POST['NoAset'];
	$NameAset=$_POST['NameAset'];
	$User=$_POST['User'];
	$Status=$_POST['Status'];
	$No_Po=$_POST['No_Po'];

	$query=mysqli_query($koneksi,"UPDATE aset SET ID_Aset='ID_Aset',NoAset='$NoAset',NameAset='$NameAset',User='$User',Status='$Status', No_Po='$No_Po' WHERE ID_Aset='$ID_Asetlama'") or die(mysqli_error($koneksi));

	if ($query){
		header("Location: dataaset.php");
	}else{
		echo "Gagal";
	}
 ?>
<?php

include 'koneksi.php';

$ID_Po = $_POST['ID_Po'];
$No_Po = $_POST['No_Po'];
$Date_Po = $_POST['Date_Po'];


$query = mysqli_query($koneksi,"INSERT INTO po (ID_Po,No_Po,Date_Po) VALUES ('$ID_Po','$No_Po','$Date_Po')") or die(mysqli_error($koneksi));

if($query){
	header("location: tambahpo.php");
}else{
	echo "Gagal";
}

?>
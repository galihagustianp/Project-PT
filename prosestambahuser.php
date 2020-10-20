<?php

include 'koneksi.php';

$ID_User = $_POST['ID_User'];
$Nama_User = $_POST['Nama_User'];
$Bagian = $_POST['Bagian'];


$query = mysqli_query($koneksi,"INSERT INTO user (ID_User,Nama_User,Bagian) VALUES ('$ID_User','$Nama_User','$Bagian')") or die(mysqli_error($koneksi));

if($query){
	header("location: tambahuser.php");
}else{
	echo "Gagal";
}

?>
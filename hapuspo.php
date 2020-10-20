<?php
include 'koneksi.php';
$ID_Po = $_GET['ID_Po'];

$query = mysqli_query($koneksi," DELETE FROM po WHERE ID_Po='$ID_Po' ") or die (mysqli_error($koneksi));

if($query){
	header("location: datapo.php");
}else{
	echo "Gagal";
}
?>
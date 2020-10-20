<?php 
include 'koneksi.php';

$ID_Aset=$_POST['ID_Aset'];
$NoAset=$_POST['NoAset'];
$NameAset=$_POST['NameAset'];
$User=$_POST['User'];
$Status=$_POST['Status'];
$No_Po=$_POST['No_Po'];

//$result="select No_Type from type_aset where NamaType='NamaType'";
//$query1=mysqli_query($result);

$query=mysqli_query($koneksi,"INSERT INTO aset(ID_Aset, NoAset,NameAset, User, Status,No_Po) VALUES ('ID_Aset','$NoAset','$NameAset','$User','$Status','$No_Po')") or die(mysqli_error($koneksi));

if($query){
	header("Location: tambahaset.php");
}else{
echo "Gagal";
}

 ?>



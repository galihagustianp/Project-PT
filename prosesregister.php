<?php

$db=mysqli_connect("localhost","root","","aset_manajemen");
$username=$_POST["username"];
$password=$_POST["password"];
$nama=$_POST["nama"];
$kd_karyawan=$_POST["kd_karyawan"];

$cek=mysqli_query($db, "SELECT * FROM karyawan  WHERE email='$email' AND password='$password' AND nama='$nama' AND kd_karyawan='$kd_karyawan'");

if(mysqli_num_rows($cek)==0){
	mysqli_query($db,"INSERT INTO karyawan (username, password, nama, kd_karyawan) VALUES ('$username','$password','$nama','$kd_karyawan')") or die (mysqli_error($db));
	
	header("location: login.php");
	}else{
		echo "Akun ada";
	}

?>
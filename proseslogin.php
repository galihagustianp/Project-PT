<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$Username = $_POST['Username'];
$Password = $_POST['Password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from Login where Username='$Username' and Password='$Password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['Username'] = $Username;
	$_SESSION['status'] = "login";
	header("location:tambahuser.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>
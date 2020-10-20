<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.bgc{
		margin-top: 3%;
		margin-left: 15%;
		}
	</style>
</head>
<body>
	<?php
			include 'alert.php';
		?>
	<div class="container mt-5 bgc">
    <div class="row">
        <div class="col-md-6">
		<center><h1 style="font-family: 'Aldrich'; margin-left: 45%;">Register</h1></center>
		<form class="" action="prosesregister.php" method="post">
			<label for="username">Username</label>
			<input class="form-control" type="username" name="username" value="">

			<label for="password">Password</label>
			<input class="form-control" type="password" name="password" value="">
			
			<label for="nama">Nama</label>
			<input class="form-control" type="nama" name="nama" value="">

			<label for="kd_karyawan">Kode Karyawan</label>
			<input class="form-control" type="kd_karyawan" name="kd_karyawan" value="">
			<br>
			<button href="register.php" class="btn btn-primary" type="submit" name="register">Register</button>
			
		</form>
	</div>
</div>
</div>
</body>
</html>
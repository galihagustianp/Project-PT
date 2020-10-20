<!DOCTYPE html>
<html>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lihat Data User - ADW</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="bootstrap/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="bootstrap/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="bootstrap/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="bootstrap/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script language="JavaScript" src="bootstrap/js/util.js"></script>
	<script language="JavaScript" src="bootstrap/js/playfair.js"></script>
	<script language="JavaScript" src="bootstrap/js/keymaker.js"></script>	

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker-standalone.css">
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
	<style type="text/css">
  	.form-control{
  		width: 200%;
  	}
  </style>

</head>

<body class="hold-transition skin-red sidebar-mini">


	<div class="wrapper">
	
		<header class="main-header">
			<a href="index.php" class="logo">
			  <span class="logo-mini"><b>A</b>DW</span>
			  <span class="logo-lg"><b>DATA</b>Aset</span>
			</a>
			
			<nav class="navbar navbar-static-top">
			  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only"></span>
			  </a>
			</nav>
		</header>
		
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					<li class="dropdown">
					  <a href="tentang.php">
						<i class="fa fa-th"></i> <span>Tentang Data Aset</span>
						<span class="pull-right-container">
						</span>
					  </a>
					</li>
					<li class="header">Laman</li>
					 <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-circle-o text-red"></i>  <span>Data Aset </span><span class="caret"></span> <span class="pull-right-container">
						</span></a>
			          <ul class="dropdown-menu">
			            <li><a href="tambahaset.php">Tambah Aset</a></li>
			            <li><a href="dataaset.php">Lihat Aset</a></li>
          			</ul>
       				 </li>
       				  <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-circle-o text-red"></i>  <span>Data PO </span><span class="caret"></span><span class="pull-right-container">
						</span></a>
			          <ul class="dropdown-menu">
			            <li><a href="tambahpo.php">Tambah PO</a></li>
			            <li><a href="datapo.php">Lihat PO</a></li>
          			</ul>
       				 </li>
       				 <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-circle-o text-red"></i>  <span>Data User </span><span class="caret"></span><span class="pull-right-container">
						</span></a>
			          <ul class="dropdown-menu">
			            <li><a href="tambahuser.php">Tambah User</a></li>
			            <li><a href="datauser.php">Lihat User</a></li>
          			</ul>
       				 </li>
       				 
              		<li class="dropdown"><a href="logout.php"> <i class="fa fa-circle-o text-red"></i>  <span>Keluar </span><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content">
				<div class="box box-solid">
				
					<div class="box-header with-border">

					  	<div id="heading">Aplikasi CRUD Data Aset</div>
						<div id="heading1">PT Adyawinsa Stamping Industries</div>
						<div id="heading2">Jalan Surotokunto No 109 Desa Warung Bambu Karawang Timur<br></div>
						<i class="fa fa-arrow-circle-right"></i>
						<h3 class="box-title">Lihat Data User</h3>
					</div>
					
					<div class="box-body">
						<table class="table">
							<thead>
								<tr>
									<th>Nama User</th>
									<th>Departemen</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								include'koneksi.php';
								$data=mysqli_query($koneksi,"SELECT * FROM user") or die(mysqli_error($koneksi));
								foreach ($data as $baris) {
									?>
									<tr>
										<td><?php echo $baris['Nama_User']?></td>
										<td><?php echo $baris['Bagian']?></td>
										<td><a class="btn btn-warning" href="updateuser.php?ID_User=<?php echo $baris['ID_User']?>">Update</a>
										<a class="btn btn-danger" href="hapususer.php?ID_User=<?php echo $baris['ID_User']?>">Hapus</a>
										<a href="dekripsiuser.php?ID_User=<?php echo $baris['ID_User']?>" class="btn btn-warning" >Dekripsi</a></td>
									</tr>
								<?php }
								?>
								 </table>
							
							</tbody>
						</table>
		
		</footer>
		</section>
		</form>



		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>@Copyright</b>  2020
			</div>
			<strong>Data Aset<a href=""> PT ADYAWINSA STAMPING INDUSTRIES</a></strong>
		</footer>
			</div>
	</div>


<script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<script src="bootstrap/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/bower_components/raphael/raphael.min.js"></script>
<script src="bootstrap/bower_components/morris.js/morris.min.js"></script>
<script src="bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bootstrap/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bootstrap/bower_components/moment/min/moment.min.js"></script>
<script src="bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bootstrap/bower_components/fastclick/lib/fastclick.js"></script>
<script src="bootstrap/dist/js/adminlte.min.js"></script>
<script src="bootstrap/dist/js/pages/dashboard.js"></script>
<script src="bootstrap/dist/js/demo.js"></script>

</body>
</html>
<script type="text/javascript">
$.fn.datepicker.defaults.format = "dd/mm/yyyy";
$('.datepicker').datepicker({
 
});
</script>

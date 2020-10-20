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
	<title>Dekripsi Data User - ADW</title>
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
	<style type="text/css">
  	.form-control{
  		width: 200%;
  	}
  </style>
<script language="JavaScript">
		function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }
   
   if ((! document.Playfair_Loaded) || (! document.Util_Loaded) ||
       (! document.Keymaker_Loaded) ||
       (! document.getElementById('output')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   
   Keymaker_Start();
   upd();
}


function upd()
{
   var keyunchanged = IsUnchanged(document.encoder.skip) *
	   IsUnchanged(document.encoder.key);
	   
   if (keyunchanged == 0)
   {
      // Update the rectangle
      var k, elem;
      
      k = MakeKeyedAlphabet(document.encoder.skip.value +
         document.encoder.key.value);
      k = k.slice(1, k.length);
      elem = document.getElementById('alphabet');
      elem.innerHTML = HTMLTableau(k);
   }
   
   if (keyunchanged *
       IsUnchanged(document.encoder.text) *
       IsUnchanged(document.encoder.encdec) *
       IsUnchanged(document.encoder.skipto) *
       IsUnchanged(document.encoder.doubleencode))
   {
      window.setTimeout('upd()', 100);
      return;
   }

   ResizeTextArea(document.encoder.text);
      
   var elem = document.getElementById('output');
   
   if (document.encoder.text.value != "")
   {
	   var flags = 1;

	   if (document.encoder.doubleencode.checked) {
		   flags -= 1;
		}
      elem.innerHTML = SwapSpaces(HTMLEscape(Playfair(document.encoder.encdec.value * 1,
         document.encoder.text.value, document.encoder.skip.value,
         document.encoder.skipto.value, document.encoder.key.value, flags)));
   }
  
      
   window.setTimeout('upd()', 100);
}


function insert_spaces()
{
   var c = '', n = 0, cc, i;
   
   for (i = 0; i < document.encoder.text.value.length; i ++)
   {
      cc = document.encoder.text.value.charAt(i);
      c += cc;
      cc = cc.toUpperCase();
      if (cc >= 'A' && cc <= 'Z')
      {
         n ++;
	 if (n == 1)
	 {
	    c += 'X';
	    n = 0;
	 }
      }
   }
   
   document.encoder.text.value = c;
}

function insert_spasi()
{
   var c = '', n = 0, cc, i;
   
   for (i = 0; i < document.encoder.text.value.length; i ++)
   {
      cc = document.encoder.text.value.charAt(i);
      c += cc;
      cc = cc.toUpperCase();
      if (cc >= 'A' && cc <= 'Z')
      {
         n ++;
	 if (n == 1)
	 {
	    c += 'X';
	    n = 0;
	 }
      }
   }
   
   document.encoder.text.value = c;
}

function only_letters()
{   
	
  var str = document.getElementById("output").innerHTML; 
  var res = str.replace("X", "");
  document.getElementById("output").innerHTML = res;
}

function only_letter()
{   
	
  var str = document.getElementById("output").innerHTML; 
  var res = str.replace("Q", "");
  document.getElementById("output").innerHTML = res;
}

function only_lette()
{   
	
  var str = document.getElementById("output").innerHTML; 
  var res = str.replace("Z", "");
  document.getElementById("output").innerHTML = res;
}

function kennedy()
{
   document.encoder.encdec.value = -1;
   document.encoder.skip.value = "J";
   document.encoder.skipto.value = "I";
   document.encoder.key.value = "ROYAL NEW ZEALAND NAVY";
   document.encoder.text.value = "KX JEYU REB EZW EHEW RYTU HE YFSKRE " +
      "HE GOYFIWTT TUOLKS YCA JPOBO TE IZONTX BYBW T GONE YC UZWRGD S " +
      "ONSXBOU YWR HEBAAHYUSED Q"
   document.encoder.doubleencode.checked = 0;
}

window.setTimeout('start_update()', 100);
	
	</script>
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
						<h3 class="box-title">Dekripsi Nama User</h3>
					</div>
					
					<div class="box-body">
					<?php 
						include 'koneksi.php'; 
						$ID_User=$_GET['ID_User'];
						$data=mysqli_query($koneksi,"SELECT * FROM user WHERE ID_User='$ID_User' ") or die(mysqli_error($koneksi));
						$baris=mysqli_fetch_array($data);
					 ?>
						<form class="" action="prosesupdateuser.php?ID_User=<?php echo $ID_User ?>" method="post" name="encoder" method=post>
						<p><select name="encdec">
						   <option value="1">Enkripsi
						   <option value="-1" selected>Dekripsi
						</select>
						<input type=checkbox name="doubleencode"> <input onclick="myFunction()" value="?" type="reset"></input>

<script>
function myFunction() {
  alert("Keterangan :\n\n1. Enkripsi : Dapat Enkripsi Data \n2. Dekripsi : Dapat Dekripsi Data\n3. Checkbox : Dapat Enkripsi Ganda Kata");
}
</script></p>
						<p>Ganti huruf <select name="skip">
						   <option value="A">A
						   <option value="B">B
						   <option value="C">C
						   <option value="D">D
						   <option value="E">E
						   <option value="F">F
						   <option value="G">G
						   <option value="H">H
						   <option value="I">I
						   <option value="J" selected>J
						   <option value="K">K
						   <option value="L">L
						   <option value="M">M
						   <option value="N">N
						   <option value="O">O
						   <option value="P">P
						   <option value="Q">Q
						   <option value="R">R
						   <option value="S">S
						   <option value="T">T
						   <option value="U">U
						   <option value="V">V
						   <option value="W">W
						   <option value="X">X
						   <option value="Y">Y
						   <option value="Z">Z
						</select> menjadi <select name="skipto"></p>
						   <option value="A">A
						   <option value="B">B
						   <option value="C">C
						   <option value="D">D
						   <option value="E">E
						   <option value="F">F
						   <option value="G">G
						   <option value="H">H
						   <option value="I" selected>I
						   <option value="J">J
						   <option value="K">K
						   <option value="L">L
						   <option value="M">M
						   <option value="N">N
						   <option value="O">O
						   <option value="P">P
						   <option value="Q">Q
						   <option value="R">R
						   <option value="S">S
						   <option value="T">T
						   <option value="U">U
						   <option value="V">V
						   <option value="W">W
						   <option value="X">X
						   <option value="Y">Y
						   <option value="Z">Z
						</select></p>
						
						<p>Kata Kunci:  <input type=text name=key value="" size=30></p>
						<table border=0 cellspacing=0 cellpadding=0>
						<tr><td valign=top>Pengunaan Tabel:</td><td>&nbsp;&nbsp;&nbsp;</td>
						<td><b><span id=alphabet><tt>A B C D E<br>
						F G H I K<br>
						L M N O P<br>
						Q R S T U<br>
						V W X Y Z
						</tt></span></b></td></tr>
						</table>

						
		<div class="col-xs-6">
		
	 	<br><label for="Nama_User">Nama User</label>
	 	<textarea name="text" class="form-control" name="Nama_User" readonly=""><?php echo $baris['Nama_User'] ?></textarea>

	 	<br><label for="Nama_User">Hasil Dekripsi</label>
	 	<textarea type="text" id='output' class="form-control" readonly=""></textarea>
	 	<a href="#" onclick="only_letters(); return false;" >Hapus Huruf X</a> -
	 	<a href="#" onclick="only_letter(); return false;" >Hapus Huruf Q</a> -
	 	<a href="#" onclick="only_lette(); return false;" >Hapus Huruf Z</a><br>
	 	
	 	<br><label for="Bagian">Departemen</label>
	 	<input type="text" class="form-control" name="Bagian" value="<?php echo $baris['Bagian'] ?>" readonly="">
		
		</footer>
		</section>
		</form>



		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>@Copyright</b>  2020
			</div>
			<strong>Data Aset<a href="https://adminlte.io"> PT ADYAWINSA STAMPING INDUSTRIES</a></strong>
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
<?php
include "koneksi.php";
?>
<html>
<head>
	<title> Sistem Informasi Nilai Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="jquery/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(wov.png);  background-repeat: repeat-x repeat-y;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"
				 data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				 >
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="utama.php">SISFO NILAI</a>
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				   <li class="active">
					<li><a href="?page=carimahasiswa.php">Cari Mahasiswa</a></li>
					<li><a href="?page=carimatakuliah.php">Cari Matakuliah</a></li>
					<li><a href="?page=carinilai.php">Cari Nilai</a></li>
				   </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="?page=logout.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<?php

if (isset($_GET['page']))
include "$_GET[page]";
else
echo "<p align=center><img src= logoamik.jpg width=265 height=265></p> 
	  <h1 align=center><font color=#0000FF face=verdana>
	   SISTEM INFORMASI NILAI</font></h1>
	  <p align=center><font color=#0000FF face=verdana>Oleh</font></p>
	  <p align=center><font color=#0000FF face=verdana>
	  <a href=?page=profile.php>Profile</a></font></p>
	 ";
?>

<div class=" col-sm-10 col-md-offset-1">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle"
					data-toggle="collapse" data-target="#footerbar"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>

			        
				</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="footerbar">
					<ul class="nav navbar-nav">
						<li class="active">
						<li><a href="?page=mahasiswa.php">Mahasiswa</a></li>
						<li><a href="?page=matakuliah.php">Matakuliah</a></li>
						<li><a href="?page=nilai.php">Nilai</a></li>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
</div>
<!--
<footer class="bs-docs-footer"></footer> -->

</body>
</html>

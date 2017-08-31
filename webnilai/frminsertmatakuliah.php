<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Matakuliah</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body style="background-image:url(wov.png);  background-repeat: repeat-x repeat-y;>


<div class="container">
	<div class="row"></div>
		<div class="col-sm-12">
			<div class="page-header"><h1 align="center">Masukkan Data Matakuliah</h1></div>
			<form class="form-horizontal" action="insertmatakuliah.php" method="POST" role="form">
				<div class="form-group">
					<label for="kdmk" class="control-label col-sm-2">Kode Matakuliah</label>
					<div class="col-sm-7">
						<input type="text" name="kdmk" class="form-control" placeholder="Masukkan Kode Matakuliah" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nama" class="control-label col-sm-2">Nama Matakuliah</label>
					<div class="col-sm-7">
						<input type="text" name="nmmk" class="form-control" placeholder="Masukkan Nama Matakuliah" required>
					</div>
				</div>
				<div class="form-group">
					<label for="jk" class="control-label col-sm-2">Jurusan</label>
					<div class="col-sm-2">
							<input name="jurusan[]" type="radio" value="Manajemen Informatika">Manajemen Informatika<br>
							<input name="jurusan[]" type="radio" value="Komputerisasi akuntansi">Komputerisasi Akuntansi<br> 
					</div>
				</div>	
		
	<div class="form-group">
					<label for="nama" class="control-label col-sm-2">SKS</label>
					<div class="col-sm-7">
						<input type="text" name="sks" class="form-control" placeholder="Masukkan SKS" required>
					</div>
				</div>
	<div class="form-group">
					<label for="nama" class="control-label col-sm-2"></label>
					<div class="col-sm-7">
						<button type="submit" id="submit" name="submit" class="btn btn-success btn-block">Simpan</button>
						<button type="reset" id="reset" name="reset" class="btn btn-danger btn-block">Batal</button>
					</div>

			</form>
		</div>
		<br>
		<p align="center"><b>
		Kembali ke <a href="utama.php?page=matakuliah.php" class="btn btn-primary btn-sm">Matakuliah</a>
		<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>

</body>
</html>
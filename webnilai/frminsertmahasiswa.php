<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <title>Input Data Mahasiswa</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body style="background-image:url(wov.png);  background-repeat: repeat-x repeat-y;>

<div class="container">
	<div class="row"></div>
		<div class="col-sm-12">
			<div class="page-header"><h1 align="center">Masukkan Data Mahasiswa</h1></div>
			<form class="form-horizontal" action="insertmahasiswa.php" method="POST" role="form">
				<div class="form-group">
					<label for="nim" class="control-label col-sm-2">NIM</label>
					<div class="col-sm-7">
						<input type="text" name="nim" class="form-control" placeholder="Inputkan NIM" required>
					</div>
				</div>
	
				<div class="form-group">
					<label for="nama" class="control-label col-sm-2">Nama</label>
					<div class="col-sm-7">
						<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" >
					</div>
				</div>

				<div class="form-group">
					<label for="jk" class="control-label col-sm-2">Jenis Kelamin</label>
					<div class="col-sm-2">
							<input name="jk[]" type="radio" value="Pria">Pria<br>
							<input name="jk[]" type="radio" value="Wanita">Wanita
					</div>
				</div>
				
				<div class="form-group">
					<label for="tptlahir" class="control-label col-sm-2">Tempat lahir</label>
					<div class="col-sm-7">
						<input type="text" name="tptlahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tgllahir" class="control-label col-sm-2">Tanggal Lahir</label>
					<div class="col-sm-2">
 						<select class="form-control" name="tgl">
							<?php for ($x=01; $x<=31; $x++)
							echo "<option>".$x."</option>";
							?>
						</select>
						<select class="form-control" name="bln">
							<option> Januari </option>
							<option> Februari </option>
							<option> Maret </option>
							<option> April </option>
							<option> Mei </option>
							<option> Juni </option>
							<option> Juli </option>
							<option> Agustus </option>
							<option> September </option>
							<option> Oktober </option>
							<option> November </option>
							<option> Desember </option>
						</select>
						<select class="form-control" name="thn">
							<?php for ($x=1980; $x<=2000; $x++)
							echo "<option>".$x."</option>";
							?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="kelas" class="control-label col-sm-2">Kelas</label>
					<div class="col-sm-2">
						<select class="form-control" name="kelas">
						<?php for ($x=1; $x<=5; $x++)
					echo "<option>15 M 0".$x."</option>";
						?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="jurusan" class="control-label col-sm-2">Jurusan</label>
					<div class="col-sm-3">
						<select class="form-control" name="jurusan[]" id="jurusan">
							<option value="MJ">Masukkan Jurusan Anda</option>
							<option value="Manajemen Informatika">Manajemen Informatika</option>
							<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
						</select>
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
		Kembali ke <a href="utama.php?page=mahasiswa.php" class="btn btn-primary btn-sm">Mahasiswa</a>
		<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>

</body>
</html>
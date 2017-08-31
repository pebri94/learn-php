<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Nilai</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body style="background-image:url(wov.png);  background-repeat: repeat-x repeat-y;>

<div class="container">
	<div class="row"></div>
		<div class="col-sm-12">
			<div class="page-header"><h1 align="center">Masukkan Data Nilai</h1></div>
			<form class="form-horizontal" action="insertnilai.php" method="POST" role="form">
			
<div class="form-group">
<label for="nim" class="control-label col-sm-2">NIM</label>
	<div class="col-sm-7">
		<select name="nim" class="form-control">
					
<?php
$query="SELECT*FROM mahasiswa ORDER BY nim";
$hasil=mysql_query($query)or die("Query gagal!");
while($data=mysql_fetch_array($hasil))
{
echo '<option value="'.$data['nim'].'">'.$data['nim'].
	':'.$data['nama'].'</option>';}?>
</select>
</div>
</div>

<div class="form-group">
<label for="nim" class="control-label col-sm-2">Kode Matakuliah</label>
	<div class="col-sm-7">
		<select name="kdmk" class="form-control">
					
<?php
$query="SELECT*FROM matakuliah ORDER BY kdmk";
$hasil=mysql_query($query)or die("Query gagal!");
while($data=mysql_fetch_array($hasil))
{ echo '<option value="'.$data['kdmk'].'">'.$data['kdmk'].':
'.$data['nmmk'].'</option>';}
?></select>
</div>
</div>

<div class="form-group">
<label for="nim" class="control-label col-sm-2">TUGAS</label>
	<div class="col-sm-7">
		<input type="text" name="tugas" class="form-control" placeholder="Inputkan Tugas" required>
			</div>
	</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">KUIS</label>
		<div class="col-sm-7">
			<input type="text" name="kuis" class="form-control" placeholder="Inputkan Kuis" required>
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">UTS</label>
		<div class="col-sm-7">
			<input type="text" name="uts" class="form-control" placeholder="Inputkan UTS" required>
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">UAS</label>
		<div class="col-sm-7">
			<input type="text" name="uas" class="form-control" placeholder="Inputkan UAS" required>
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">Hadir</label>
		<div class="col-sm-7">
			<input type="text" name="hadir" class="form-control" placeholder="Inputkan Hadir" required>
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
		Kembali ke <a href="utama.php?page=nilai.php" class="btn btn-primary btn-sm">Nilai</a>
		<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>

</body>
</html>
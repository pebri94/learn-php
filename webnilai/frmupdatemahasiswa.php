<?php
include "koneksi.php";
include "menu.php";
?>
<html>
<head>
<title>Update Data Mahasiswa</title>
<link rel="styletsheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootsrtap.js"></script>
</head>
<body>
<?php
$c = "1";
if (isset($_GET['nim']))
{ $c = (get_magic_quotes_gpc()) ?
$_GET['nim'] :	addslashes($_GET['nim']); }
$query = sprintf("SELECT * FROM mahasiswa WHERE nim = '%s'", $c);
$hasil = mysql_query($query) or die ("Query gagal!");
$data = mysql_fetch_array($hasil);
?>
<div class="container">
<h1 align="center"><b>UPDATE DATA MAHASISWA</b></h1>
  <form class="form-horizontal" method="post" action="updatemahasiswa.php">
    
      <div class="form-group">
	      <label for="nim" class="control-label col-sm-2">NIM :</label>
			  <div class="col-sm-7">
				  <input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>">
			  </div>
	  </div>
	  
	  <div class="form-group">
	     <label for="nama" class="control-label col-sm-2">NAMA :</label>
			  <div class="col-sm-7">
				  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
			  </div>
	  </div>
	  
	  <div class="form-group">
					<label for="jk" class="control-label col-sm-2">JENIS KELAMIN :</label>
					<div class="col-sm-3">
							<input name="jk[]" type="radio" value="Pria">Pria<br>
							<input name="jk[]" type="radio" value="Wanita">Wanita<br> 
					</div>
	  </div>
	  
	<div class="form-group">
	     <label for="tptlahir" class="control-label col-sm-2">TEMPAT LAHIR :</label>
			  <div class="col-sm-7">
				  <input type="text" name="tptlahir" class="form-control" value="<?php echo $data['tptlahir'];?>">
			  </div>
	  </div>
	  
	<div class="form-group">
					<label for="tgllahir" class="control-label col-sm-2">TANGGAL LAHIR:</label>
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
					<label for="jk" class="control-label col-sm-2">JURUSAN :</label>
					<div class="col-sm-3">
							<input name="jurusan[]" type="radio" value="Manajemen Informatika">Manajemen Informatika<br>
							<input name="jurusan[]" type="radio" value="Komputerisasi Akuntansi">Komputerisasi Akuntansi<br> 
					</div>
	  </div>

	
	<div class ="form-group">
                  <label for="nama" class="control-label col-sm-2"></label>
	              <div class="col-sm-7">
				  <button type="submit" id="submit" name="submit" class="btn btn-success btn-block">Update</button>
				  <button type="reset" id="reset" name="reset" class="btn btn-success btn-block">Batal</button>
				 </div>
  </div>


</form>  
</div>
<p align="center"><b>
Kembali ke <a href="utama.php?page=mahasiswa.php" class="btn btn-primary btn-sm">Mahasiswa</a>
<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>
</body>
</html>
		  
		  
		  
		  
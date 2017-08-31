<?php
include "koneksi.php";
include "menu.php";
?>
<html>
<head>
<title>Update Data Matakuliah</title>
<link rel="styletsheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootsrtap.js"></script>
</head>
<body>
<?php
$c = "1";
if (isset($_GET['kdmk']))
{ $c = (get_magic_quotes_gpc()) ?
$_GET['nim'] :	addslashes($_GET['kdmk']); }
$query = sprintf("SELECT * FROM matakuliah WHERE kdmk = '%s'", $c);
$hasil = mysql_query($query) or die ("Query gagal!");
$data = mysql_fetch_array($hasil);
?>
<div class="container">
<h1 align="center"><b>UPDATE DATA MATAKULIAH</b></h1>
  <form class="form-horizontal" method="post" action="updatematakuliah.php">
    
      <div class="form-group">
	      <label for="kdmk" class="control-label col-sm-2">Kode Matakuliah :</label>
			  <div class="col-sm-4">
				  <input type="text" name="kdmk" class="form-control" value="<?php echo $data['kdmk'];?>">
			  </div>
	  </div>
					
	  <div class="form-group">
	      <label for="nmmk" class="control-label col-sm-2">Nama Matakuliah :</label>
					<div class="col-sm-4">
						<input type="text" name="nmmk" class="form-control" value="<?php echo $data['nmmk'];?>">
					</div>
	  </div>
	  
	  
	<div class="form-group">
					<label for="jurusan" class="control-label col-sm-2">Jurusan</label>
					<div class="col-sm-3">
							<input name="jurusan[]" type="radio" value="Manajemen Informatika">Manajemen Informatika<br>
							<input name="jurusan[]" type="radio" value="Komputerisasi akuntansi">Komputerisasi Akuntansi<br> 
					</div>
	  </div>
	<div class="form-group">
					<label for="sks" class="control-label col-sm-2">SKS</label>
					<div class="col-sm-2">
						<select name="sks" class="form-control col col-sm-2">
						<?php for ($x=1; $x<=5; $x++)
						echo "<option>".$x."</option>";
						?>
					</select>
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
Kembali ke <a href="utama.php?page=matakuliah.php" class="btn btn-primary btn-sm">Matakuliah</a>
<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>
</body>
</html>
				  
	  
	  

	
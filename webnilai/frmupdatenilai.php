<?php 
require('koneksi.php'); 
include "menu.php";
?>

<html>
<head>
<title>Update Data Nilai</title>
<link rel="styletsheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootsrtap.js"></script>
</head>
<body>

<?php 
if (isset($_GET['nim'],$_GET['kdmk']))
{
  $c1 = (get_magic_quotes_gpc()) ? $_GET['nim'] : addslashes($_GET['nim']);
  $c2 = (get_magic_quotes_gpc()) ? $_GET['kdmk'] : addslashes($_GET['kdmk']);
}
$query = sprintf("SELECT * FROM nilai where nim = '%s' and kdmk = '%s'",
$c1,$c2);
$hasil = mysql_query($query) or die ("Query gagal!");
$x = 1;
$data = mysql_fetch_array($hasil);
?>


<div class="container">
<h1 align="center"><b>UPDATE DATA NILAI</b></h1>
  <form class="form-horizontal" method="post" action="updatenilai.php">
  
      <div class="form-group">
	      <label class="control-label col-sm-2">NIM :</label>
			  <div class="col-sm-5">
				  <select name="nim" class="form-control">
			 
<?php 
$query1 = sprintf("SELECT * from mahasiswa where nim = '%s'", $c1);
$hasil1 = mysql_query($query1) or die ("Query gagal!");
while ($data1 = mysql_fetch_array($hasil1))
{ echo '<option value="'.$data1['nim'].'">'.$data1['nim'].
' : '.$data1['nama'].'</option>';}
?>
</select>
  </div>
</div>
 <div class="form-group">
	 <label for="kdmk" class="control-label col-sm-2">Kode Matakuliah :</label>
		 <div class="col-sm-5">
			<select name="kdmk" class="form-control">

<?php
$query2 = "SELECT * FROM matakuliah where kdmk='$c2'";
$hasil2 = mysql_query($query2) or die ("Query gagal!");
while($data2 = mysql_fetch_array($hasil2))
{ echo '<option value="'.$data2['kdmk'].'">'.$data2['kdmk'].
' : '.$data2['nmmk'].'</option>';}
?>
</select>
  </div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">Tugas :</label>
		<div class="col-sm-1">
			<input type="text" name="tugas" class="form-control" value="<?php echo $data['tugas'];?>">
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">Kuis :</label>
		<div class="col-sm-1">
			<input type="text" name="kuis" class="form-control" value="<?php echo $data['kuis'];?>">
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">UTS :</label>
		<div class="col-sm-1">
			<input type="text" name="uts" class="form-control" value="<?php echo $data['uts'];?>">
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">UAS :</label>
		<div class="col-sm-1">
			<input type="text" name="uas" class="form-control" value="<?php echo $data['uas'];?>">
		</div>
</div>

<div class="form-group">
	<label for="nim" class="control-label col-sm-2">Hadir :</label>
		<div class="col-sm-1">
			<input type="text" name="hadir" class="form-control" value="<?php echo $data['hadir'];?>">
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
Kembali ke <a href="utama.php?page=nilai.php" class="btn btn-primary btn-sm">Nilai</a>
<a href="utama.php" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-home"></a></span>
		</b></p>

</div>
</body>
</html>
				  
	  































































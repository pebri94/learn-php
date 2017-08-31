<?php 
include "koneksi.php";
include "menu.php";
?>

<div class="col-sm-10 col-md-offset-1">
<h3> HASIL DATA MATAKULIAH</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">

<?php 
echo "<h3>Hasil Pencarian....<br>Berdasarkan ".$_POST['cbocari']." dan ".$_POST['txtcari']." </h3>";
?>

<thead>
 <th>NO</th>
 <th>KODE MATAKULIAH</th>
 <th>NAMA MATAKULIAH</th>
 <th>JURUSAN</th>
 <th>SKS</th>
</thead>

<?php
$query = "SELECT * FROM matakuliah WHERE $_POST[cbocari] LIKE '$_POST[txtcari]%'";
$hasil = mysql_query($query) or die ("Query gagal!");
$x=1;
while($data = mysql_fetch_array($hasil))
{

 ?>
 
 <tbody>
	  <tr>
		<td><?php echo $x ?></td>
		<td><?php echo $data['kdmk'] ?></td>
		<td><?php echo $data['nmmk'] ?></td>
		<td><?php echo $data['jurusan'] ?></td>
		<td><?php echo $data ['sks'] ?></td>
	
 <?php 
$x = $x+1;
} ?>
</tr>
</tbody>
</table>
</div>
<br>
<br>
<p align="center">
<font size="3" face="comic sans ms" color="#0000ff">
Kembali ke :
<a href="utama.php?page=carimatakuliah.php"><span class="glyphicon glyphicon-search"></span></a>
<a href="utama.php"><span class="glyphicon glyphicon-home"></span></a>
      
</body>
</html>






 

 
 
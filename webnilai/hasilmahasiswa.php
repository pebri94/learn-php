<?php 
include "koneksi.php";
include "menu.php";
?>
<div class="collapse navbar-collapse" id="bar">
<div class="col-sm-10 col-md-offset-1">
<h3> HASIL DATA MAHASISWA</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">

<?php 
echo "<h3>Hasil Pencarian....<br>Berdasarkan ".$_POST['cbocari']." dan ".$_POST['txtcari']." </h3>";
?>

<thead>
 <th>NO</th>
 <th>NIM</th>
 <th>NAMA</th>
 <th>JENIS KELAMIN</th>
 <th>TPT LAHIIR</th>
 <th>TGL LAHIR</th>
 <th>KELAS</th>
 <th>JURUSAN</th>
</thead>

<?php
$query = "SELECT * FROM mahasiswa WHERE $_POST[cbocari] LIKE '$_POST[txtcari]%'";
$hasil = mysql_query($query) or die ("DATA Tidak di database");
$x=1;
while($data = mysql_fetch_array($hasil))
{
 ?>
 
  <tbody>
	  <tr>
		<td><?php echo $x ?></td>
		<td><?php echo $data['nim'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['jk'] ?></td>
		<td><?php echo $data ['tptlahir'] ?></td>
		<td><?php echo $data ['tgllahir'] ?></td>
		<td><?php echo $data ['kelas'] ?></td>
		<td><?php echo $data ['jurusan'] ?></td>
 <?php 
$x = $x+1;
} ?>
</tr>
</tbody>
</table>
<tfooter>
<br>
<br>
<p align="center">
<font size="3" face="comic sans ms" color="#0000ff">
Kembali ke :
<a href="utama.php?page=carimahasiswa.php"><span class="glyphicon glyphicon-search"></span></a>
<a href="utama.php"><span class="glyphicon glyphicon-home"></span></a>
 </font>
 </p>
 </tfooter>
</div>
</div>

 </div>
     
</body>
</html>




 

 
 
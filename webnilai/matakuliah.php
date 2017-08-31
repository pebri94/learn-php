<div class="col-sm-10 col-md-offset-1">
<h3> LIST DATA MATAKULIAH</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">

 
  <thead>
    <th>NO</th>
	<th>KDMK</th>
	<th>NMMK</th>
	<th>JURUSAN</th>
	<th>SKS</th>
	<th>PROSES</th>
  </thead>
  
<?php
$query = "SELECT * FROM matakuliah ORDER BY kdmk";
$hasil = mysql_query($query) or die ("Query Gagal!");
$x = 1;


while($data = mysql_fetch_array($hasil))
{

?>

<tbody>
   <tr>
	<td><?php echo $x ?></td>
	<td><?php echo $data['kdmk'] ?></td>
	<td><?php echo $data['nmmk'] ?></td>
	<td><?php echo $data['jurusan'] ?></td>
	<td><?php echo $data['sks'] ?></td>
	<td>
		<a href="frmupdatematakuliah.php?kdmk=<?php echo $data['kdmk']; ?>">
		<span class="glyphicon glyphicon-edit"></span></a>
			| <a href="deletematakuliah.php?kdmk=<?php echo $data['kdmk'];?>">
	 		<span class="glyphicon glyphicon-trash"></span></a>
	</td>
	
<?php
$x = $x + 1;
} ?>
</tr>
</tbody>
</table>
</div>
<br>
<br>
<p align="center">
<font size="3" face="comic sans ms" color="#00FF66">
Kembali ke
	<a href="utama.php"><span class="glyphicon glyphicon-home"></span></a>
	 :: <a href="frminsertmatakuliah.php"><span class="glyphicon glyphicon-plus"></span></a>
</font>
</div>
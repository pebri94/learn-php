<div class="col-sm-10 col-md-offset-1">
<h3> LIST DATA MAHASISWA</h3>
<div class="table-responsive">
<table class="table table-striped">

<thead>
 <th>NO</th>
 <th>NIM</th>
 <th>NAMA</th>
 <th>JENIS.K</th>
 <th>TPT LAHIR</th>
 <th>TGL LAHIR</th>
 <th>KELAS</th>
 <th>JURUSAN</th>
 <th>PROSES</th>
</thead>
 
 
 <?php
 $query = "SELECT * FROM mahasiswa ORDER BY nim";
 $hasil = mysql_query($query) or die ("Query gagal!");
 $x = 1;
 
 while($data = mysql_fetch_array($hasil))
 {
?>

<tbody> 
	<tr>
		<td> <?php echo $x ?> </td>
		<td> <?php echo $data['nim'] ?></td>
		<td> <?php echo $data['nama'] ?></td>
		<td> <?php echo $data ['jk'] ?></td>
		<td> <?php echo $data ['tptlahir'] ?></td>
		<td> <?php echo $data ['tgllahir'] ?></td>
		<td> <?php echo $data ['kelas'] ?></td>
		<td> <?php echo $data['jurusan'] ?></td>
		<td>
	 	    <a href="frmupdatemahasiswa.php?nim=<?php echo $data['nim'];?>">
	 	    <span class="glyphicon glyphicon-edit"></span></a>
			| <a href="deletemahasiswa.php?nim=<?php echo $data['nim'];?>">
	 		 <span class="glyphicon glyphicon-trash"></span></a>
	    </td>
	
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
<font size="3" face="comic sans ms" color="#ff0000">
Kembali ke
      <a href="utama.php"><span class="glyphicon glyphicon-home"></span></a>
	  :: <a href="frminsertmahasiswa.php"><span class="glyphicon glyphicon-plus"></span></a>
</font>
</div>

	     
	
		
	
	     
 
 
 
 

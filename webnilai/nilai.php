<div class="col-sm-10 col-md-offset-1">
<h3> LIST DATA NILAI</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">

<thead>
 <th>NO</th>
 <th>NIM</th>
 <th>NAMA</th>
 <th>KODE MK</th>
 <th>NAMA MK</th>
 <th>TUGAS</th>
 <th>KUIS</th>
 <th>UTS</th>
 <th>UAS</th>
 <th>HADIR</th>
 <th>NILAI ANGKA</th>
 <th>NILAI HURUF</th>
 <th>KET</th>
 <th>PROSES</th>
 </thead>
 
 
 <?php
 $query = "SELECT nilai.nim,mahasiswa.nama,nilai.kdmk,matakuliah.nmmk,tugas,kuis,uts,uas,hadir,angka,huruf,ket
 FROM nilai inner join mahasiswa on nilai.nim = mahasiswa.nim inner join matakuliah on nilai.kdmk = matakuliah.kdmk";
 
 $hasil = mysql_query($query) or die ("Query gagal!");
 $x = 1;
  while($data = mysql_fetch_array($hasil))
 {
 
	?>
	
	<tbody>
	  <tr>
		<td><?php echo $x ?></td>
		<td><?php echo $data['nim'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['kdmk'] ?></td>
		<td><?php echo $data ['nmmk'] ?></td>
		<td><?php echo $data ['tugas'] ?></td>
		<td><?php echo $data ['kuis'] ?></td>
		<td><?php echo $data ['uts'] ?></td>
		<td><?php echo $data ['uas'] ?></td>
		<td><?php echo $data['hadir'] ?></td>
		<td><?php echo $data['angka'] ?></td>
		<td><?php echo $data['huruf'] ?></td>
		<td><?php echo $data['ket'] ?></td>
		<td>
	 	    <a href="frmupdatenilai.php?nim=<?php echo $data['nim'];?>&kdmk=<?php echo $data['kdmk'];?>">
			<span class="glyphicon glyphicon-edit"></span></a>
			| <a href="deletenilai.php?nim=<?php echo $data['nim'];?>&kdmk=<?php echo $data['kdmk'];?>">
			<span class="glyphicon glyphicon-trash"></span></a>
	    </font></td>
		
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
Menuju ke
      <a href="utama.php"><span class="glyphicon glyphicon-home"></span></a>
	  :: <a href="frminsertnilai.php"><span class="glyphicon glyphicon-plus"></span></a>
</body>
</html>
	     
	
		
	
	     
 
 
 
 

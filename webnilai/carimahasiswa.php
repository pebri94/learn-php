<div class="col-sm-10 col-md-offset-1">
<form method="post" action="hasilmahasiswa.php">
<div class="table-responsive">
<table class="table table-hover table-border">
	<thead>
		<th colspan="3"><font color="#000000" size="3" face="Arial">
		Pencarian data mahasiswa berdasarkan : </font></th>
	</thead>
	<tr>
		<td><select name="cbocari">
		<option value="nim">Nim</option>
		<option value="nama">Nama</option>
		<option value="jk">Jenis Kelamin</option>
		<option value="tptlahir">Tempat Lahir</option>
		<option value="tgllahir">Tanggal Lahir</option>
		<option value="kelas">Kelas</option>
		<option value="jurusan">Jurusan</option>
		</select></td>
		<td><font size="2" face="Arial">keywordnya : </font></td>
		<td><input type="text" name="txtcari" placeholder="isi kolom" style="background-color:"></td>
	</tr>
	<tr>
		<td colspan="3"><input class="btn btn-primary" type="submit" name="Submit" value="Cari"></td>
	</div>
	</div>
	</table>
	</tr>
	</form>
	
	
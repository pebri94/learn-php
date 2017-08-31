<div class="col-sm-10 col-md-offset-1">
<form method="post" action="hasilnilai.php">
<div class="table-responsive">
<table class="table table-hover table-border">
	<thead>
		<th colspan="3"><font color="#000000" size="3" face="Arial">
		Pencarian data nilai berdasarkan : </font></th>
	</thead>
	
	<tr>
		<td><select name="cbocari">
		<option value="no">No</option>
		<option value="nim">Nim</option>
		<option value="nama">Nama</option>
		<option value="nmmk">Nmmk</option>
		<option value="kdmk">Kdmk</option>
		<option value="tugas">Tugas</option>
		<option value="kuis">Kuis</option>
		<option value="uts">Uts</option>
		<option value="uas">Uas</option>
		<option value="hadir">Hadir</option>
		<option value="angka">Angka</option>
		<option value="huruf">Huruf</option>
		<option value="ket">Ket</option>
		<td><font size="2" face="Arial">keywordnya : </font></td>
		<td><input type="text" name="txtcari"></td>
	</tr>
<tr>
		<td colspan="3"><input class="btn btn-primary" type="submit" name="Submit" value="Cari"></td>
	</div>
	</div>
	</table>
	</tr>
	</form>
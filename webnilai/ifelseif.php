<html>
<head>
<title>*::* Statement If Elseif Else*::*</title></head>
<body>
<h3>Belajar Statement If Elseif Else dengan Form</h3>
<form>
<table>
<tr>
<td>Nomor Induk</td>
<td>:</td>
<td><input type="text"name="nim"></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text"name="nama"></td>
</tr>
<tr>
<td>Nilai Kehadiran</td>
<td>:</td>
<td><input type="text"name="hadir"></td>
</tr>
<tr>
<td>Nilai Kuis</td>
<td>:</td>
<td><input type="text"name="kuis"></td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td>:</td>
<td><input type="text"name="tugas"></td>
</tr>
<tr>
<td>Nilai UTS</td>
<td>:</td>
<td><input type="text"name="uts"></td>
</tr>
<tr>
<td>Nilai UAS</td>
<td>:</td>
<td><input type="text"name="uas"></td>
</tr>
<tr>
<td><input type="submit"value="hitung"></p></td>
</tr>
</table>
</form>
<?php
$nilaiangka=($_REQUEST['hadir']*0.1)+($_REQUEST['kuis']*0.1)+($_REQUEST['tugas']*0.2)+$_REQUEST['uts']*0.25)+$_REQUEST['uas']*0.35);
if($nilaiangka>=80)
{$nilaihuruf="A";
	$predikat="Sangat Baik";
	$ket="Lulus";}
Elseif($nilaiangka>=70)
{$nilaihuruf="B";
	$predikat="Baik";
	$ket="Lulus";}
Elseif($nilaiangka>=60)
	{$nilaihuruf="C";
	$predikat="Cukup";
	$ket="Lulus";}
Elseif($nilaiangka>=50)
{$nilaihuruf="D";
	$predikat="Kurang";
	$ket="Gagal";}
else
{$nilaihuruf="E";
	$predikat="Buruk";
	$ket="Gagal";}
		print"NIM :<b>".$_REQUEST['nim']."<b><br>";
		print"Nama :<b>".$_REQUEST['nama']."<b><br>";
		print"Total Nilai Angka :<b>".$nilaiangka."<b><br>";
		print"Nilai Huruf :<b>".$nilaihuruf."<b><br>";
		print"Predikat :<b>".$predikat."<b><br>";
		print"Keterangan :<b>".$ket."<b>";
?>
</body>
</html>
<html>
<head>
<title>*::* Statement If *::*</title>
</head>
<body>
<h3>Belajar Statement If dengan Form</h3>
<form action="statement.php"method="GET">
<table>
<tr>
<td>Masukkan Tipe Rekening</td>
<td><input type="text"name="tipe"></td>
</tr>
<tr>
<td><p><input type="submit" value="ok"></p></td>
</tr></table>
</form>
<?php
if($_REQUEST['tipe']==1)
{$rekening="Personal";
$biaya="Rp.1000";}
if($_REQUEST['tipe']==2)
{$rekening="Perusahaan Kecil";
$biaya="Rp.1200";}
if($_REQUEST['tipe']==3)
{$rekening="Perusahaan Besar";
$biaya="Rp.1400";}
	print"tipe :<b>".$_REQUEST['tipe']."<b><br>";
	print"Rekening Langganan Air :
	<b>".$rekening."</b><br>";
	print"Biaya:<b>".$biaya."</b><br>";
?>
</body>
</html>
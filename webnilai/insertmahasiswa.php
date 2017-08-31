<?php
include"koneksi.php";
//include"validasi.php";

$tgllahir=$_POST['tgl']."/".$_POST['bln']."/".$_POST['thn'];
if(!empty($_POST['jk']))
	{foreach($_POST[jk] as $value)
	{$jk=$value;}}
if(!empty($_POST['jurusan']))
	{foreach($_POST['jurusan'] as $value)
	{$jurusan=$value;}}
$query = "INSERT INTO mahasiswa VALUES ('"	.$_POST['nim']	."','"	.
$_POST['nama']	. "','" . $jk . "','" . $_POST['tptlahir'] . "','" .$tgllahir . "','" . $_POST['kelas'] . "','" . $jurusan . "')";

mysql_query($query) or die ("Query gagal!");
header ("location: utama.php?page=mahasiswa.php");
?>
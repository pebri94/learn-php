<?php
include"koneksi.php";
//include"validasi.php";

if(!empty($_POST['jurusan']))
	{foreach($_POST['jurusan']as $value)
	{$jurusan=$value;}}
$query="INSERT INTO matakuliah VALUES('".$_POST['kdmk']."','".
$_POST['nmmk']."','".$jurusan."','".$_POST['sks']."')";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=matakuliah.php");
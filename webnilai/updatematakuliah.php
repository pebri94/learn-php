<?php
include "koneksi.php";
//include"validasi.php";
if(!empty($_POST['jurusan']))
	{foreach($_POST['jurusan']as $value)
	{$jurusan=$value;}}
$query = "Update matakuliah ";
$query.= "SET nmmk ='" . $_POST['nmmk'] .
"', sks = '" . $_POST['sks'] . "',jurusan = '" . $jurusan . "'where kdmk = '" . $_POST['kdmk'] . "'";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=matakuliah.php");
?>

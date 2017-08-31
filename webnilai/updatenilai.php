<?php
include "koneksi.php";
//include "validasi.php";
$angka=($_POST['tugas']*0.2)+($_POST['kuis']*0.1)+($_POST['uts']*0.25)+($_POST['uas']*0.35)+($_POST['hadir']*0.1);

	if($angka >= 80)
	$huruf = "A";
	elseif ($angka >= 70)
	$huruf = "B";
	elseif ($angka >= 60)
	$huruf = "C";
	elseif ($angka >= 50)
	$huruf = "D";
	else
	$huruf = "E";
	
	if ($angka >= 60)
	$ket = "LULUS";
	else
	$ket = "GAGAL";
$query = "Update nilai SET tugas = '".$_POST['tugas'].
"',kuis = '".$_POST['kuis']."',uts ='".$_POST['uts'].
"',uas = '".$_POST['uas']."',hadir = '".$_POST['hadir']."', angka= '".$angka."',huruf='".$huruf.
"', ket='".$ket."' where nim = '".$_POST['nim'].
"' and kdmk='".$_POST['kdmk']."'";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=nilai.php");
?>

























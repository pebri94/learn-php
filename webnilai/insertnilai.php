<?php
include "koneksi.php";

$angka=($_POST['tugas']*0.2)+($_POST['kuis']*0.1)+($_POST['uts']*0.25)+
($_POST['uas']*0.35)+($_POST['hadir']*0.1);

	if($angka >= 80)
		$huruf ="A";
	elseif ($angka >= 70)
		$huruf ="B";
	elseif ($angka >= 60)
		$huruf ="C";
	elseif ($angka >= 50)
		$huruf ="D";
	else
		$huruf ="E";
		
	if ($angka >= 60)
		$ket = "LULUS";
	else
		$ket = "TIDAK LULUS";
		
		
$query="INSERT INTO nilai VALUES ('".$_POST['nim']."','".
$_POST['kdmk']."',".$_POST['tugas'].",".$_POST['kuis'].",".
$_POST['uts'].",".$_POST['uas'].",".$_POST['hadir'].",".
$angka.",'".$huruf."','".$ket."')";

mysql_query($query) or die ("Query Gagal tuh!");

header ("location:utama.php?page=nilai.php");
?>
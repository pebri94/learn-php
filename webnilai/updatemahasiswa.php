<?php
include "koneksi.php";
//include "validasi.php";

$tgllahir=$_POST['tgl']." ".$_POST['bln']." ".$_POST['thn'];
if(!empty($_POST['jk']))
  { foreach ($_POST['jk'] as $value)
  { $jk=$value;}}
if(!empty($_POST['jurusan']))
  { foreach ($_POST['jurusan'] as $value)
  { $jurusan=$value;}}
$query = "Update mahasiswa "; 
$query.= "SET nama ='" . $_POST['nama'] .
"', jk = '" . $jk . "',tptlahir = '" . $_POST['tptlahir'] .
"',tgllahir = '" . $tgllahir . "',kelas = '" . $_POST['kelas'] . 
"',jurusan = '" . $jurusan . "' where nim = '" . $_POST['nim'] .
"'";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=mahasiswa.php");
?>

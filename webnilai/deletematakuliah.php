<?php
include "koneksi.php";
//include "validasi.php";

$query = "Delete From matakuliah Where Kdmk ='".$_GET['kdmk']."'";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=matakuliah.php");
?>
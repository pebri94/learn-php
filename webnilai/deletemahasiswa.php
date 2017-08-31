<?php
include "koneksi.php";
//include "validasi.php";

$query = "Delete From mahasiswa Where nim ='".$_GET['nim']."'";

mysql_query($query) or die ("Query gagal!");
header ("location:utama.php?page=mahasiswa.php");
?>
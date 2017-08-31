<?php
include "koneksi.php";
//include "validasi.php";

$query = "Delete From nilai where nim = '".$_GET['nim'].
"' and kdmk='".$_GET['kdmk']."'";

mysql_query($query) or die ("Query gagal!");
header ("location: utama.php?page=nilai.php");
?>
<?php
session_start();
include "koneksi.php";
$data=mysql_query("select * from login where user='$_POST[user]'and pass='$_POST[pass]'");

$hasil=mysql_fetch_array($data);
if ($_POST['user']=="")
   {header("Location:gagal.php");}
else
   {if ($_POST['pass']="$hasil[pass]")
      {$user="hasil[user]";
	  $pass="hasil[pass]";
	  //session_register("user");
	  //session_register("pass");
	  header("Location:utama.php");
	  }
   else
   {header("Location:gagal.php");}
   }
?>
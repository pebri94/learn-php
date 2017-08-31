<?php
session_start();
//session_unregister("//user");
//session_unregister("//pass");
  $logoutGoTo="index.php";
  if($logoutGoTo) {
  header("Location: $logoutGoTo");
  exit;
  }
?> 
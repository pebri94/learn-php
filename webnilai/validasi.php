<?php
 session_start();
 $pengguna ="";
 $akses = "true";
 
 function validasi ($strusers,$strgroup,$username,$usergroup)
 { $isvalid = false;
  if (!empty($username))
     {$arrusers = explode(",",$strusers);
	  $arrgroup = explode(",",$strgroups);
       if (in_array($username, $arrusers))
	      {$isvalid = true;}
		
       if (in_array($usergroup,$arrgroups))
	      {$isvalid = true;}
       if(($strusers== "") && true)
	      {$isvalid = true;}
	}
	return $isvalid;
}

$goto = "gagal.php";
if (!((isset($_session['user'])) && (validasi("",$pengguna,$_session['user'],$_session['pass']))))
 {$char = "?";
 $referensi = $_server['php_self'];
 if (strpos($goto, "?")) $char ="&";
 if (isset ($query_string) && strlen($query_string) > 0)
 $referensi .= "?".$query_string;
 $goto = $goto.$char."accesscheck" .urlencode($referensi);
 header("location: ".$goto);
 exit;
 }
 ?>
 
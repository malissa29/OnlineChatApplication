<!DOCTYPE html>
<html>
<body>
<?php

if (!isset($_SESSION)) {
  session_start();
}

$ip = $_SERVER['REMOTE_ADDR'];

$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$user=$_SESSION['MM_Username'];
$result1 = mysql_query("SELECT logged FROM login WHERE username='$user'");
echo $result1;

$extract = mysql_fetch_array($result1);
$result2=$extract['logged'];
?>
<br> Logged in status : 
<?php
echo $result2;
if($result2==0)

{
mysql_query("UPDATE `login` SET `logged` = '1' WHERE `username` = '$user'");
mysql_query("UPDATE `login` SET `in_ip` = '$ip' WHERE `username` = '$user'");



header('location:mainsub.php');


}




else
{
		 
/*echo "	<br><br><center><b>ACCOUNT ACCESS DENIED<br>Already logged in from another location<br>
	";  */


mysql_query("UPDATE `login` SET `logged` = '2' WHERE `username` = '$user'");
mysql_query("UPDATE `login` SET `ext_ip` = '$ip' WHERE `username` = '$user'");
header('location:wait.php');
}
?>


</body>
</html>

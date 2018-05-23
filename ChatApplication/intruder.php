<?php   


//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);

$user=$_SESSION['MM_Username'];
$result1 = mysql_query("SELECT logged FROM login WHERE username='$user'");


$extract = mysql_fetch_array($result1);
$result2=$extract['logged'];

if($result2==2){
	
	$result3 = mysql_query("SELECT ext_ip FROM login WHERE username='$user'");
	$extract1 = mysql_fetch_array($result3);
	$intr=$extract1['ext_ip'];
	
	echo "<!DOCTYPE html>
<html>
<body><center>
Your account was tried to access from IP Address".$intr." <br>Please Authenticate.<br><br>


<a href='accept.php' class='button2'>Accept</a>

<a href='reject.php' class='button2'>Reject</a>

";
}


  
?>
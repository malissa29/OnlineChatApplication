

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="dreamer.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php 
$ip = $_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION)) {
  session_start();
}
$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$user=$_SESSION['MM_Username'];
$result1 = mysql_query("SELECT logged FROM login WHERE username='$user'");


$extract = mysql_fetch_array($result1);
$result2=$extract['logged'];


if($result2==4)
{

echo "	<br><br><center><b>ACCOUNT ACCESS DENIED<br>Unauthorised<br>
	";

}


else
	{
		if($result2==3)
{





echo( "<div class='msg'><center>ACCOUNT ACCESS GRANTED<br><a href='mainsub3.php' class='button'>Continue</a></div>");

}
}


?>

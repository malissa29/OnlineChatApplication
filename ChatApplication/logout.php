<html>
<head>

<link href="dreamer.css" rel="stylesheet" type="text/css">

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (!isset($_SESSION)) {
  session_start();
}
$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$user=$_SESSION['MM_Username'];


// Deleting a cookie
setcookie("login_same_user_check", "", time()-3600);



if($_SESSION['MM_Username']==NULL)
{
	
	mysql_query("UPDATE `login` SET `logged` = '0' WHERE '1'");
	echo "<center><br><br><br><b class='msg'>ALL USERS LOGGED OUT<br><br><a href='index.php' class='button2'>Return</a><div  align='right'>";
	
}

else
{
mysql_query("UPDATE `login` SET `logged` = '0' WHERE `username` = '$user'");
$_SESSION['MM_Username'] = NULL;
header('location:index.php');
}

?>
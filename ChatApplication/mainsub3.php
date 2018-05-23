<?php 
$ip = $_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION)) {
  session_start();
}
$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$user=$_SESSION['MM_Username'];

mysql_query("UPDATE `login` SET `logged` = '1' WHERE `username` = '$user'");
mysql_query("UPDATE `login` SET `in_ip` = '$ip' WHERE `username` = '$user'");
header('location:mainsub.php');
?>
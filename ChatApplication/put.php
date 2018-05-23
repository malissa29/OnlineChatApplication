<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
$user=$_POST['uname'];
$msg=$_POST['msg'];
$ip=$_SERVER['REMOTE_ADDR'];


$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
mysql_query("INSERT INTO `logs` (`username`, `msg`, `ip`) VALUES ('$user', '$msg', '$ip');");

header('location:main.php');
?>
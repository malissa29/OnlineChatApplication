<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$msg=$_POST['msg'];
$ip=$_SERVER['REMOTE_ADDR'];


$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
mysql_query("INSERT INTO `single` ( `msg`, `sender`, `receiver`, `ip`) VALUES ('$msg', '$sender', '$receiver', '$ip');");

header('location:singlechat.php');





?>
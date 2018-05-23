<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
$id=$_POST['reply_id'];
$msg=$_POST['reply_msg'];
$user=$_SESSION['MM_Username'];
$ip=$_SERVER['REMOTE_ADDR'];

$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
mysql_query("INSERT INTO `chatbox`.`reply` (`id`, `username`, `msg`, `ip`) VALUES ('$id', '$user', '$msg','$ip');");

header('location:main.php');
?>
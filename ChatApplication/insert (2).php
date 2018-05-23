<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
$ip=$_REQUEST['ips'];

$con = mysql_connect('mysql.hostinger.in','u204225782_mark','markmark');
mysql_select_db('u204225782_chat',$con);

mysql_query("INSERT INTO logs (`username` , `msg`, `ip_sender`) VALUES ('$uname','$msg','$ip')");

$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result1)){
		echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
	}




?>
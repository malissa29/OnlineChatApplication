<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);

mysql_query("INSERT INTO logs (`username` , `msg`) VALUES ('$uname','$msg')");

$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result1)){
		echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
	}




?>
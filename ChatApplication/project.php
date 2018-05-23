<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_project = "mysql.hostinger.in";
$database_project = "u836608268_chat";
$username_project = "u836608268_mk";
$password_project = "mkmkmk";
$project = mysql_pconnect($hostname_project, $username_project, $password_project) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
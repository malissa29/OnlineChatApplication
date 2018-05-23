<?php

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
	
	$user=$_SESSION['MM_Username'];
	mysql_query("UPDATE `login` SET `logged` = '0' WHERE `username` = '$user'");
	
	$result1 = mysql_query("SELECT logged FROM login WHERE username='$user'");
echo $result1;
	
	
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
 // $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "logout.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}





//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

//$_SESSION['MM_Replyname'] =$extract['username']

?>




<!doctype html>
<<html>
<head>
<title>Chat Box</title>
<link href="dreamer.css" rel="stylesheet" type="text/css">
<script src="jq\jq.js"></script>




<script>

	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load('intruder.php');}, 2000);
    });

</script>



<body>




<div id="chatlogs" class="msg">
<img src="1-0.gif" />
</div>





<h1 align="center">Chat</h1>
<a href="main.php" class="button2">Group Chat</a><div  align="right">
<a href="<?php echo $logoutAction ?>" class="button">Log out</a></div>

<br><br>

<?php
$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$result1 = mysql_query("SELECT username FROM login");

echo "<fieldset class='field'>";
echo "<h2 align='center'>Select User to Chat</h2><br><table align='left'>
		";
while($extract = mysql_fetch_array($result1))
	{
	if($_SESSION['MM_Username']!=$extract['username'])
	{
		
		echo "<form method='POST' ACTION='singlechatlinker.php'>
		<input type='hidden' name='rusername' value=".$extract['username'].">
		<center><input type='submit' class='button2' value=".$extract['username']."></center>
		</form></a><pre>  </pre>";
	}
	}

 
 
 
 echo "<br></table></fieldset>";
 ?>


</body>
</html>
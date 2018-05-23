<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
  
  
//retreive user from cookie
$cookie_name = "customer";
if(!isset($_COOKIE[$cookie_name])) 
{
echo "Unexpected Error, please log in again";
}
else 
{
$receiver=$_COOKIE[$cookie_name];
}

//$receiver=$_SESSION['MM_Replyname'];
}
?>
<?php
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  //$_SESSION['MM_Username'] = NULL;
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
?>
<!doctype html>
<html>
<head>

<link href="dreamer.css" rel="stylesheet" type="text/css">
<script src="jq\jq.js"></script>
<script>

	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load('single.php');}, 2000);
    });

</script>

<script>

	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs1').load('intruder.php');}, 2000);
    });

</script>

<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1 align="center"><?php echo $receiver ?></h1>

<div id="chatlogs1" class="msg">
<img src="1-0.gif" />
</div>

<a href="mainsub.php" class="button2">Back</a>
<div align="right">
<a href="<?php echo $logoutAction ?>" class="button">Log out</a>
<br>
<br>
</div>

<div id="chatlogs" class="msg">
LOADING CHATLOGS PLEASE WAIT... <img src="1-0.gif" />
</div>
<br>

<form method="POST" name="form" ACTION="singleput.php"><br>
<div class="back">
<input type="hidden" required name="sender" style="width:200px;" value="<?php echo $_SESSION["MM_Username"] ?>"/>
<input type="hidden" required name="receiver" style="width:200px;" value="<?php echo $receiver ?>"/>
<br>Your Message: <br />
<textarea name="msg" required style="width:200px; height:70px" class="inp" autofocus></textarea><br><br>

<input type="submit" class="button" value="Send"><br><br />

</div><br>
</form>




</body>
</html>
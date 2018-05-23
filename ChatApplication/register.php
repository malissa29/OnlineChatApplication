<?php require_once('project.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "register_form")) {
  $insertSQL = sprintf("INSERT INTO login (username, password, ip, email) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['ip_add'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_project, $project);
  $Result1 = mysql_query($insertSQL, $project) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$ip=$_SERVER['REMOTE_ADDR'];
?>
<!doctype html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["register_form"]["password"].value;
	var y = document.forms["register_form"]["re_password"].value;
    if (x !== y) {
        alert("Please check the entered passwords. Password and Retype Password fields do not match");
        return false;
    }
}
</script>
<meta charset="utf-8">
<title>title goes here</title>

<link href="dreamer.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1 align="center">Register</h1>

<form onsubmit="return validateForm()" action="<?php echo $editFormAction; ?>" method="POST" name="register_form">
<label><br>
  <div align="center">Username:   
  
</label>

  <input name="username" type="text" id="username" class="inp" placeholder="Must Be Unique" required autofocus>
  <br><br>
</div>
<div align="center">Email ID: <input type="email" required name="email" placeholder="Enter your email" class="inp"></div><br>
<label>
  <div align="center">Password:   
  
</label>

  <input name="password" type="password"  class="inp" id="password" placeholder="Password" required onChange="MM_validateForm('username','','R','password','','R','re_password','','R');return document.MM_returnValue">
  <br>
  <br>
</div>
<label>
  <div class="aaa" align="center">Retype Password:
</label>

  <input name="re_password" type="password"  id="re_password" class="inp" placeholder="Retype Password" required>
  <br><br><input type="submit" value="Register" class="button">
  
</div>
<input type="hidden" name="ip_add" style="width:200px;" value="  <?php echo $ip ?>"/>
<input type="hidden" name="MM_insert" value="register_form">
</form><br>

<div align="center">Already have an account?   <a href="index.php" class="msg">  Login</a></div>


</body>
</html>
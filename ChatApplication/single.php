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

$sender=$_SESSION["MM_Username"];
}

$con = mysql_connect('mysql.hostinger.in','u836608268_mk','mkmkmk');
mysql_select_db('u836608268_chat',$con);
$result1 = mysql_query("SELECT * FROM `single` WHERE sender in ('$sender', '$receiver') AND receiver in ('$sender', '$receiver') ORDER BY timestamp");

if($_SESSION["MM_Username"]=='markfurtado')
	{
		$result2 = mysql_query("SELECT * FROM `single` ORDER BY timestamp");
		echo "<fieldset class='field'><br>";
		echo "<table align='left'>";
		echo "<tr><th class='msg'>ID</th><th class='msg'>MSG</th><th class='msg'>Sender</th><th class='msg'>Receiver</th><th class='msg'>Timestamp</th><th class='msg'>IP</th></tr><tr></tr>";
		while($extract2 = mysql_fetch_array($result2))
		{
			echo "<tr><td class='uname'>". $extract2['id'] ."</td><td class='msg'>". $extract2['msg'] ."</td><td class='uname'>". $extract2['sender'] ."</td><td class='msg'>". $extract2['receiver'] ."</td><td class='uname'>". $extract2['timestamp'] ."</td><td class='msg'>". $extract2['ip'] ."</td></tr>";
		}
	}


else
{
	echo "<fieldset class='field'><br>";
	 echo "<table align='left'>";

while($extract1 = mysql_fetch_array($result1))
	{
		
		 if($extract1['sender']==$_SESSION["MM_Username"])
		{
			echo "<tr><td><span class='uname'>You : </span></td><td><span class='msg'>". $extract1['msg'] ."</span></td><td> </td><td> </td><td class='uname'>". $extract1['timestamp'] ."</td></tr>";
			
		}
		else
		{
			echo "<tr><td> </td><td><span class='uname'>". $extract1['sender'] ." : </span><span class='msg'>". $extract1['msg'] ."</td><td> </td><td> </td><td class='uname'>". $extract1['timestamp'] ."</td></tr>";
		}
		
	}
	
}//<span class='uname'>". $extract2['username'] ." : </span><span class='msg'>". $extract2['msg'] ."</span>
	
	
	/*
	echo "<tr><td class='msg'>". $extract1['id'] .": :</td><td class='uname'>". $extract1['username'] ." : </td><td class='msg'>". $extract1['msg'] ."</td></tr>";
		$result2 = mysql_query("SELECT * FROM reply ORDER by id DESC");
		while($extract2 = mysql_fetch_array($result2))
		{
			if($extract2['id']==$extract1['id'])
			{
				echo "<tr> <td></td> <td></td><td><span class='uname'>". $extract2['username'] ." : </span><span class='msg'>". $extract2['msg'] ."</span></td></tr>";
			}
		}
		*/
  


echo "</table></fieldset>";

?>
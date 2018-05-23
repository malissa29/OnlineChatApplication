<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>

<html>
<head>
<title>Chat Box</title>
<link href="dreamer.css" rel="stylesheet" type="text/css">
<script src="jq\jq.js"></script>
<script>

function submitChat(){
		if(form1.uname.value == '' || form1.msg.value == ''){
				alert('Please Enter Your Message!!!');
				return;
			}
			form1.uname.readOnly = true;
			form1.uname.style.border = 'none';
			$('#imageload').show();
			var uname = form1.uname.value;
			var msg = form1.msg.value;
			var xmlhttp = new XMLHttpRequest();
			
			xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState==4&&xmlhttp.status==200){
							document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
							$('#imageload').hide();
						}
				}
			xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
			xmlhttp.send();
	}
	
	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load('logs.php');}, 1000);
    });

</script>

</head>
<body>
<h1 align="center"> Online Group Chat</h1>

<form method="POST" name="form1" ACTION="reply.php">
<br>
<div class="back"><input type="hidden" name="uname" style="width:200px;" value="<?php echo $_SESSION["MM_Username"] ?>"/><br>
Your Message: <br />
<textarea name="msg" style="width:200px; height:70px" class="inp"></textarea><br /><br>
<a href="#" onclick="submitChat()" class="button">Send</a><br><br></div><br />

<div class="back">
  <p>Reply to Message number :<br/> <input type="number" name="reply_id" class="inp"><br /><br />
    Your Message: <br />
    <textarea name="reply_msg" style="width:200px; height:70px" class="inp"></textarea>
  <br />
  </p>
  <input type="submit" class="button" value="Reply"><br>
</div>
<br>
</form>
<br>
<h2 align="center">Messages</h2>

<div id="imageload" style="display:none;">
<img src="1-0.gif" />
</div>

<div id="chatlogs">
LOADING CHATLOGS PLEASE WAIT... <img src="1-0.gif" />
</div>


</body>
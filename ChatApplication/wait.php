<!doctype html>
<<html>
<head>
<title>Chat Box</title>
<link href="dreamer.css" rel="stylesheet" type="text/css">
<script src="jq\jq.js"></script>




<script>

	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load('wait2.php');}, 3000);
    });

</script>

<script>
$(document).ready(function(){
  $(".msg2").fadeOut(8000);
});
</script>


<body>
<center>	
<br><br>

<div class="msg2"><p>
Already Logged in from another location<br>Requested for Authorisation</p>
</div>

<br><br>
<div id="chatlogs" class="msg">
</div>


</body>
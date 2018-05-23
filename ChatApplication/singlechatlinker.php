<?php

//create cookie
$cookie_name = "customer";
$cookie_value = $_POST['rusername'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");



header('location:singlechat.php');
?>
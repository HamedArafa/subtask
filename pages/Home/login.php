<?php

	session_start();

	$_SESSION["loggedin"]=true;
	$_SESSION["current_user_name"]=$_POST["name_txt"];
	header("Location: home.php");
?>
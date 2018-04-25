<?php
	session_start();
	session_unset();					//destroy all php variables
	session_destroy();					//destroy php session
	$_SESSION = array();				//override any existing stored information

	$redirectURL = "../../index.php";		//url where to redirect user after successful logout
	header("location:".$redirectURL);	//redirect user after successful logout

	//stop running code if script reaches this far
	exit();
?>

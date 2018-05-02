<?php
session_start();
	include_once 'config.php';
	$School = mysqli_real_escape_string($conn, $_POST['education']);
	$testname = mysqli_real_escape_string($conn, $_POST['testname']);
	unset($_SESSION['reportSchool']);
	unset($_SESSION['reportTestName']);
	unset($_SESSION['reportUID']);
	//Error handlers
	//Check for empty fields
	if ($School != "All") {
		$_SESSION["reportSchool"] = $School;

	} 
	if($testname != "All"){
		$_SESSION["reportTestName"] = $testname;
		
	}

	header("Location: ../../results.php?".$_SESSION["reportSchool"]); // should send us to the profile page after a succesful log in
	exit();
	
 ?>
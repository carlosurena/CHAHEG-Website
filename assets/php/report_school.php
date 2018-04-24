<?php

	include_once 'config.php';
	$School = mysqli_real_escape_string($conn, $_POST['education']);
	$testname = mysqli_real_escape_string($conn, $_POST['testname']);

	//Error handlers
	//Check for empty fields
	if ($School != "All") {
		$_SESSION["reportSchool"] = $School;
		
	} else if($testname != "All"){
		$_SESSION["reportTestName"] = $testname;
		
	}else {
		//header("Location: ../../dashboard.php");
		exit();
	}

	header("Location: ../../results.php?".$_SESSION["reportSchool"]); // should send us to the profile page after a succesful log in
	exit();
	
 ?>
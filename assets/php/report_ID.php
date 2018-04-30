<?php
<<<<<<< HEAD
if (isset($_POST['uID'])) {
	include_once 'config.php';
	$userID = mysqli_real_escape_string($conn, $_POST['uID']);
=======
session_start();
if (isset($_POST['uID'])) {
	include_once 'config.php';
	$userID = $_POST['uID'];
	unset($_SESSION['reportSchool']);
	unset($_SESSION['reportTestName']);
	unset($_SESSION['reportUID']);
>>>>>>> refs/remotes/origin/Chris-Branch

	//Error handlers
	//Check for empty fields
	if (empty($userID)) {
		echo "ERROR - Please enter valid StudentID: Empty Field.";
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[0-9]*$/", $userID)) {
			echo "ERROR - Please enter valid StudentID: Wrong Characters.";
			//header("Location: ../../signup.php?signup=invalid");
			exit();
		} else {
			//Check if uID is valid
			$sql = "SELECT * FROM users WHERE UserID = '$userID' ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				//header("Location: login.php?login=invalid_account"); // User does not exist
				//$_SESSION['ErrorCode'] = 'Invalid_Account';
				echo "ERROR - Please enter valid StudentID: No ID Found.";
			} else {	
				$_SESSION["reportUID"] = $userID;
				echo $userID;
				header("Location: ../../results.php?".$_SESSION["reportUID"]); // should send us to the profile page after a succesful log in
				exit();
				
			}
		}
	}
} else {
	//header("Location: ../../dashboard.php");
	exit();
}
?>
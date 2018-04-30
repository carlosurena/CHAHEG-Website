<?php
session_start();
if (isset($_POST['email'])) {
	include 'config.php';
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['passwd']);
	// error handeling
	// check empty input
	if(empty($email) ||empty($password)){
			header("Location: login.php?login=empty_fields"); // no password or email provided
			$_SESSION['ErrorCode'] = 'Empty_Fields';
	} else {
		$sql = "SELECT * FROM users WHERE Email = '$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: login.php?login=invalid_account"); // User does not exist
			$_SESSION['ErrorCode'] = 'Invalid_Account';
		} else {
			// taking returned data from database and putting it in an array
			if ($row = mysqli_fetch_assoc($result)) {
				#echo $row['fname'];
				// dehashing Password
				$hashedPWDchech = password_verify($password, $row['Password']);
				if ($hashedPWDchech == false) {
					header("Location: login.php?login=error3"); // incorrect password or email
					$_SESSION['ErrorCode'] = 'Error_3';
				} elseif ($hashedPWDchech == true) {
					// login the user. Give session a name and then give $row the columns
					$_SESSION['FirstName'] = $row['FirstName'];
					$_SESSION['LastName'] = $row['LastName'];
					$_SESSION['Email'] = $row['Email'];
					$_SESSION['UserID'] = $row['UserID'];
					$_SESSION['School'] = $row['School'];
					header("Location: ../../dashboard.php");
				}
			}
		}
	}
}else{
	header("Location: ../../index.php?login=error4"); // invalid email?
	$_SESSION['ErrorCode'] = 'Error_4';
}
?>
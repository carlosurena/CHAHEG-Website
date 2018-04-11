<?php

session_start();

if (isset($_POST['email'])) {
	include 'config.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['passwd']);

	// error handeling
	// check empty input
	if(empty($email) ||empty($password)){
			header("Location: login.php?login=error1");

	} else {
		$sql = "SELECT * FROM users WHERE Email = '$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: login.php?login=error2");
		} else {
			// taking returned data from database and putting it in an array
			if ($row = mysqli_fetch_assoc($result)) {
				#echo $row['fname'];
				// dehashing Password
				$hashedPWDchech = password_verify($password, $row['Password']);
				if ($hashedPWDchech == false) {
					header("Location: login.php?login=error3");
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
	header("Location: ../../index.php?login=error4");

}
?>

<?php
session_start();
if (isset($_POST['fname'])) {
	include_once 'config.php';
	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$education = mysqli_real_escape_string($conn, $_POST['education']);
	$passwd = mysqli_real_escape_string($conn, $_POST['passwd']);
    $YOG = mysqli_real_escape_string($conn, $_POST['YOG']);
    $isAdmin = mysqli_real_escape_string($conn, $_POST['ad']);
	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($education) || empty($passwd) || empty($YOG)) {
		header("Location: ../signup.php?signup=empty");
		$_SESSION['ErrorCodeSignUp'] = 'Empty_Fields_Signup';
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../../signup.php?signup=invalid");
			$_SESSION['ErrorCodeSignUp'] = 'Invalid_Characters';
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../../signup.php?signup=invalidemail");
				$_SESSION['ErrorCodeSignUp'] = 'Invalid_Email';
				exit();
			} else {
                // if there are any users with the same email
				$sql = "SELECT * FROM users WHERE email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					header("Location: ../../signup.php?signup=usertaken");
					$_SESSION['ErrorCodeSignUp'] = 'User_Exists';
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
					//Insert the user into the database
                    $sql = "INSERT INTO users (Email, Password, School, LastName, FirstName, PermissionID)

									// VALUES ('$email','$hashedPwd','$education','$last', '$first','$isAdmin')";

							VALUES ('$email','$hashedPwd','$education','$last', '$first','$isAdmin')";

                            //VALUES ('$email', '$education', '$YOG', '$last', '$first','$hashedPwd','$isAdmin')";
					mysqli_query($conn, $sql);
					header("Location: ../../index.php?signup=success"); // should send us to the profile page after a succesful log in
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../../dashboard.php");
	exit();
}
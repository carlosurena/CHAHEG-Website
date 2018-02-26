<?php
	//check if session is already running
	if(!isset($_SESSION))
    {
        session_start();
    }//end if

    //initialize error message
	$message="";

	//if user has clicked "login"
	if(count($_POST)>0)
	{
		//collect supplied credentials
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$pass = mysqli_real_escape_string($connection,$_POST['passwd']);

		//hash password
		$password = hash("sha512", $pass);

		//user is initially not logged in
		$loggedin = 0;

		//check to see if valid user credentials
		$userQuery = "SELECT * FROM users WHERE Email='$email' AND BINARY USER_PASSWORD='$passwd'";
		$result = mysqli_query($connection,$userQuery);
		$row = mysqli_fetch_array($result);

		//if there is a match to both username and password
		if(is_array($row))
		{
			//update logged in to successful
			$loggedin = 1;

			//set session variables
			$_SESSION["user_id"] = $row['USER_ID'];
			$_SESSION["user_name"] = ucfirst(strtolower($row['USER_FIRST_NAME']))." ".ucfirst(strtolower($row['USER_LAST_NAME']));
			$_SESSION['last_login'] = $row['USER_LAST_LOGIN'];
			$_SESSION['access_wo'] = $row['USER_ACCESS_WO'];
			$_SESSION['access_equip'] = $row['USER_ACCESS_EQUIP'];
			$_SESSION['access_reports'] = $row['USER_ACCESS_REPORTS'];
			$_SESSION['access_users'] = $row['USER_ACCESS_USERS'];
			$_SESSION['access_settings'] = $row['USER_ACCESS_SETTINGS'];
			$_SESSION["last_activity"] = time();
			$_SESSION["expire"] = $_SESSION['last_activity'] + (30 * 60);

			//update last login time in database
			updateLastLogin($connection,$row['USER_ID']);
		}//end if

		//if no matching user, display error message
		else
			$message = "Incorrect Username or Password";

		//update login request log
		updateLogs($user,$pass,$loggedin,$connection);
	}

	//if user is already logged in, redirect to home page
	if(isset($_SESSION["user_id"]))
		header("Location: home.php");

	//update login log in database
	function updateLogs($user,$pass,$granted,$con)
	{
		//get ip address of user
		$ip = $_SERVER['REMOTE_ADDR'];

		//get current date of submission
		date_default_timezone_set('America/New_York');	//set timezone of server
		$datetime = date("Y-m-d H:i:s");				//get date of login attempt

		//set log values
		$sql =	"INSERT INTO WOS_Logins (LOGIN_USERNAME, LOGIN_GRANTED, LOGIN_DATE, LOGIN_IP)
				 VALUES ('$user','$granted','$datetime', '$ip')";

		//insert log values to mysql
		mysqli_query($con,$sql);
	}//close updateLogs

	//when user logs in, update it in the database
	function updateLastLogin($connection,$userID)
	{
		date_default_timezone_set('America/New_York');	//set timezone of server
		$now = date("Y-m-d H:i:s");						//get date of login
		mysqli_query($connection,"UPDATE WOS_Users SET USER_LAST_LOGIN='$now' WHERE USER_ID='$userID'");
	}//close updateLastLogin
?>

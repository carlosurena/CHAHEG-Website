<?php
session_start();
include 'assets/php/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div><nav class="navbar navbar-inverse navbar-fixed-top navigation-clean">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">
                CHAHEG
                <i class="fa fa-stethoscope"></i>
            </a>

            <a class="btn btn-link pull-right" role="button" href="#menu-toggle" id="menu-toggle" style="color:#ffffff;height:36px;font-size:25px;padding-bottom:6px;padding-top:0; ">
                <i class="fa fa-navicon"></i>
            </a>
        </div>



    </div>
</nav></div>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background-color:rgb(31,32,33);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="dashboard.php">Home </a></li>
                <li> <a href="dashboard.php">Dashboard </a></li>
                <li> <a href="courses.php">Courses</a></li>
                <li> <a href="results.php">Results</a><a href="#">Account</a><a href="assets/php/logout.php">Sign Out</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper"></div>
    </div>
    <div class="article-list" style="margin-top:68px;">
        <div class="container-fluid">
            <div class="intro">
			
			<?php
				 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                 if (!$conn)
                 {
                    die("Connection failed: " . mysqli_connect_error());
                 }
			

            $sql = "SELECT testmaterials.testname, results.score FROM testmaterials JOIN results ON testmaterials.TestID=results.TestID WHERE userid = ".$_SESSION['UserID'].";";
				// $sql = "SELECT FirstName, LastName FROM Users";
				 $result = mysqli_query($conn, $sql);

				 //$sql2 = "SELECT UserID, TestID, Score FROM Results";
				// $result2 = mysqli_query($conn, $sql2);
				 
				 $TestNameArray = array();
				 $scoreArray = array();
				 
				 $x=0;
				 if (mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $TestNameArray[$x] = $row["testname"];
                            $scoreArray[$x] = $row["score"];
                            $x++;
                        }
                    }

               // print_r($TestNameArray);
                //print_r($scoreArray);
                echo "<h1>Grades</h1>";
                $counter = 0;
                while($counter < count($scoreArray))
                {
                    echo $TestNameArray[$counter].": ".$scoreArray[$counter]."%";
                    $counter++;
                }
			
				//$UserIDArray = array();
				//$TestIDArray = array();
				//$ResultArray = array();
				// $x=0;
                 //   if (mysqli_num_rows($result2) > 0)
                 //   {
                //        while($row = mysqli_fetch_assoc($result2))
                 //       {
                 //           $UserIDArray[$x] = $row["UserID"];
				//			$TestIDArray[$x] = $row["TestID"];
                 //           $ResultArray[$x] = $row["Score"];
                //            $x++;
                 //       }
                 //   }
				//$x=0;
				//	while($x<count($firstNameArray))
				//	{
				//		echo $firstNameArray[$x]." ". $lastNameArray[$x]. " received a grade of ". $ResultArray[$x]. " on TestID: ".$TestIDArray[$x];
				//		echo "<br>";
				//		$x++;
				//	}
					
			
			
			
			?>
				
       
            </div>
            <div class="row articles">
                
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

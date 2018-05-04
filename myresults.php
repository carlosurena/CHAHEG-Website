<?php
session_start();
include 'assets/php/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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
                <li> <a href="myresults.php">Results</a><a href="assets/php/logout.php">Sign Out</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper"></div>
    </div>
    <div class="article-list" style="margin-top:68px;">
        <div class="container-fluid">
            <div class="intro">
			    <h2 class="text-center">My Grades</h2>
                <p class="text-center"></p>
            </div><br>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>University</th>
                        <th>Grade</th>
                        <th>Completion Date</th>
                        <th>Test Name</th>
                    </tr>
                </thead>
                <tbody>

                <?php
				 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                 if (!$conn)
                 {
                    die("Connection failed: " . mysqli_connect_error());
                 }
                
                $condition = 1;
                $Selected_UserID = $_SESSION['UserID'];
                $Selected_School = 'All';
                $Selected_TestName = 'All';
                $Selected_TestID = 0;

 
                
                 
            
                 
                $sql_AllTests_OneUser = "SELECT Users.FirstName, Users.LastName, Users.School, TestMaterials.TestName, Results.Score , Results.UpdatedOn
                                            FROM TestMaterials 
                                            JOIN Results ON TestMaterials.TestID=Results.TestID 
                                            JOIN Users ON Results.UserID = Users.UserID
                                            WHERE Results.UserID = $Selected_UserID
                                            ORDER BY Users.LastName";
            

                
                
                $result = mysqli_query($conn, $sql_AllTests_OneUser);
              
				 
				 $firstNameArray = array();
                 $lastNameArray = array();
                 $schoolArray = array();
                 $TestNameArray = array();
                 $ScoreArray = array();
                 //$ScoreCompletionArray = array();


				 
				 $x=0;
				 if (mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $firstNameArray[$x] = $row["FirstName"];
                            $lastNameArray[$x] = $row["LastName"];
                            $schoolArray[$x] = $row["School"];
                            $TestNameArray[$x] = $row["TestName"];
                            $ScoreArray[$x] = $row["Score"];
                            $ScoreCompletionArray[$x] = $row["UpdatedOn"];
                            $x++;
                        }
                    }

               // print_r($TestNameArray);
                //print_r($scoreArray);
                //echo "<h1>Grades</h1>";
                //$counter = 0;
                //while($counter < count($ScoreArray))
               // {
                //    echo $TestNameArray[$counter].": ".$ScoreArray[$counter]."%";
                //    $counter++;
                //}
			
			
				$x=0;
					while($x<mysqli_num_rows($result))
					{
						echo "<tr><td>" .$firstNameArray[$x]." ". $lastNameArray[$x]. "</td><td>".$schoolArray[$x]. "</td><td>". $ScoreArray[$x]. "</td><td>".$ScoreCompletionArray[$x]. "</td><td>".$TestNameArray[$x]."</td></tr>";
						//echo "<br>";
						$x++;
					}
					//echo count($ScoreArray);
			
			
			
			?>
                </tbody>
            </table>
			
				
       
            
            <div class="row articles">
                
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

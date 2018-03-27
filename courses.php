<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAHEG Courses</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar1.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar2.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="padding-top:55px;"><nav class="navbar navbar-light navbar-expand-md fixed-top bg-dark" style="background-color:rgb(34,53,228);">
    <div class="container-fluid"><a href="dashboard.html" class="navbar-brand text-white"><i class="fa fa-stethoscope"></i>CHAHEG</a>
        <a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle" style="color:#ffffff;height:36px;font-size:25px;padding-bottom:6px;padding-top:0;"><i class="fa fa-navicon"></i></a>

</nav>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="dashboard.html">Logo/Home</a></li>
                <li> <a href="courses.php">Courses</a></li>
                <li> <a href="#">Results</a></li>
                <li> <a href="#">Account</a><a href="#">Sign Out</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">My Courses</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "password";
					
					$conn = mysqli_connect($servername, $username, $password, 'CHAHEG');
				   if (!$conn) 
				   {
						die("Connection failed: " . mysqli_connect_error());
				   }
					//echo "Connected Successfully";
					
					$sql = "SELECT Name, Description FROM coursesection";
					$result = mysqli_query($conn, $sql);
					
					$sql2 = "SELECT MaterialPath FROM testmaterial";
					$result2 = mysqli_query($conn, $sql2);
					
					$nameArray = array();
					$descriptionArray = array();
					$materialPathArray = array();
					$x=0;
					if (mysqli_num_rows($result) > 0) 
					{
						while($row = mysqli_fetch_assoc($result)) 
						{
							$nameArray[$x] = $row["Name"];
							$descriptionArray[$x] = $row["Description"];
							$x++;
						}
					}
					$x=0;
					if (mysqli_num_rows($result2) > 0) 
					{
						while($row = mysqli_fetch_assoc($result2)) 
						{
							$materialPathArray[$x] = $row["MaterialPath"];
							$x++;
						}
					}
					
					//print_r($nameArray);
					//print_r($descriptionArray);
					//print_r($materialPathArray);
					
					$y=0;
					$training = "training.php?sessionvalue=";
					while($y<count($nameArray))
					{
						if($y<count($materialPathArray))
						{
							echo '<div class="col-sm-6 col-md-4 item"><a href="' . $training . $materialPathArray[$y] .'"><img class="img-fluid" src="assets/img/desk.jpg"></a>';
						}
						else
						{
							echo '<div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>';
						}
							echo '<h3 class="name">' .  $nameArray[$y] .'</h3>';
						echo	'<p class="description">' . $descriptionArray[$y] .'</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>';
						
						$y++;
					}
				?>
				
<!--			
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Course Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Course Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                <h3 class="name">Course Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
        <div
            class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
            <h3 class="name">Course Title</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    <div
        class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
        <h3 class="name">Course Title</h3>
        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
        <div
            class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
            <h3 class="name">Course Title</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
            </div>
            </div>
//-->			
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>
<?php
session_start();
include 'assets/php/config.php';
$_SESSION['URLsessionvalue'] = $_GET['URLsessionvalue'];
?>

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
                <li class="sidebar-brand"> <a href="#">Home </a></li>
                <li> <a href="dashboard.php">Dashboard </a></li>
                <li> <a href="courses.php">Courses</a></li>
                <?php
                if($_SESSION['PermissionID'] == 1)
                    {
                       echo '<li> <a href="report_form.php">Results</a><a href="assets/php/logout.php">Sign Out</a></li>';
                    }
                    else
                    {
                        echo '<li> <a href="myresults.php">Results</a><a href="assets/php/logout.php">Sign Out</a></li>';
                    }
            ?>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div>
						<?php
                        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                        if (!$conn)
                        {
                             die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT TestID FROM testmaterials WHERE MaterialPath = '".$_SESSION['URLsessionvalue']."';";
                        $result = mysqli_query($conn, $sql);

                        $x=0;
                        if (mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                               $_SESSION['TestID'] = $row["TestID"];
                            }
                        }


                        //echo $_SESSION['TestID'];

                            //$_SESSION['USERNUM'] = 1;
                           // $button = '<button class="btn btn-success btn-block" onclick="location.href="test.php";" style=" position:  absolute;">Take the test! </button>';
							$frame = "<iframe src='" .$_SESSION['URLsessionvalue']."' height='85%' width='100%' style='border: 0px;height: 85%;margin-top: 80px;' webkitAllowFullScreen Mozallowfullscreen allowFullScreen></iframe>";
							echo $frame;
                           // echo $button;
						?>
						<!-- <iframe src='http://my.visme.co/projects/dmvvdg0k-6ep5dm1gwej75dz3' height='100%' width='100%' style='border: 0px;' webkitAllowFullScreen Mozallowfullscreen allowFullScreen></iframe>
						-->

                         <button class="btn btn-success btn-block" onclick="location.href='test.php';">Take the test! </button> 

						</div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

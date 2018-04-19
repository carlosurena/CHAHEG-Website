<?php
session_start();
$_SESSION['URLsessionvalue'] = $_GET['URLsessionvalue'];
?>
<html>

<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="padding-top:55px;"><nav class="navbar navbar-light navbar-expand-md fixed-top bg-dark" style="background-color:rgb(34,53,228);">
    <div class="container-fluid"><a href="dashboard.php" class="navbar-brand text-white"><i class="fa fa-stethoscope"></i>CHAHEG</a>
        <a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle" style="color:#ffffff;height:36px;font-size:25px;padding-bottom:6px;padding-top:0;"><i class="fa fa-navicon"></i></a>

</nav>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="dashboard.php">Logo/Home</a></li>
                <li> <a href="courses.php">Courses</a></li>
                <li> <a href="#">Results</a></li>
                <li> <a href="#">Account</a><a href="assets/php/logout.php">Sign Out</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div>
						<?php	
							$frame = "<iframe src='" .$_SESSION['URLsessionvalue']."' height='100%' width='100%' style='border: 0px;' webkitAllowFullScreen Mozallowfullscreen allowFullScreen></iframe>";
							echo $frame;
						?>
						<!-- <iframe src='http://my.visme.co/projects/dmvvdg0k-6ep5dm1gwej75dz3' height='100%' width='100%' style='border: 0px;' webkitAllowFullScreen Mozallowfullscreen allowFullScreen></iframe>
						-->
				
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
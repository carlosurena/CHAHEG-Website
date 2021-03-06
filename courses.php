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
        <div class="page-content-wrapper"></div>
    </div>
    <div class="article-list" style="margin-top:68px;">
        <div class="container-fluid">
            <div class="intro">
                <h2 class="text-center" style="margin-bottom:20px;">
                <?php
                 if (isset($_SESSION['UserID'])) {
                     echo $_SESSION['FirstName']."'s ";
                 }

              ?>Courses</h2>
                <!--<p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p> -->
            </div>
            <div class="row articles">
                <?php

                   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                   if (!$conn)
                   {
                        die("Connection failed: " . mysqli_connect_error());
                   }
                    $sql = "SELECT TestName, TestDescription, MaterialPath FROM testmaterials
                    WHERE testid NOT IN (select testid from results where userid = ".$_SESSION['UserID']." and score > 80)
                    having (select count(testid) from results where userid = ".$_SESSION['UserID']." and testid=testmaterials.testid) < 3;";
                    $result = mysqli_query($conn, $sql);
                    $nameArray = array();
                    $descriptionArray = array();
                    $materialPathArray = array();

                    $x=0;
                    if (mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $nameArray[$x] = $row["TestName"];
                            $descriptionArray[$x] = $row["TestDescription"];
                            $materialPathArray[$x] = $row["MaterialPath"];
                            $x++;
                        }
                    }
                    elseif(mysqli_num_rows($result) == 0)
                    {
                        // Runs when there are no courses available and/or all have been completed. 
                        $msgImage = "<img src='images/greenCheck.png' height='25' width='25' alt='Error X Image' />";
                        $msgText = "Looks like you have finished all your tests!  Check back later to see if theres more.";
                        echo $msgImage, $msgText;
                    }
                    $y=0;
                    $training = "training.php?URLsessionvalue=";
                    while($y<count($nameArray))
                    {
                        if($y<count($materialPathArray))
                        {
                            echo '<div class="col-sm-6 col-md-4 item"><a href="' . $training . $materialPathArray[$y] .'"><img class="img-responsive" src="assets/img/desk.jpg"></a>';
                        }
                        else
                        {
                            echo '<div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-responsive" src="assets/img/desk.jpg"></a>';
                        }
                            echo '<h3 class="name">' .  $nameArray[$y] .'</h3>';
                        echo    '<p class="description">' . $descriptionArray[$y] .'</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>';
                        $y++;
                    }
                ?>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

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
                <h2 class="text-center">
                <?php
                 if (isset($_SESSION['UserID'])) {
                     echo $_SESSION['FirstName'];
                 }

              ?> Test
              <?php
                    echo $_SESSION['TestID'];
              ?>
                    </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <?php
                   // $dbServername = "127.0.0.1";
                   // $dbUsername = "db_team1_agent";
                   // $dbPassword = "NF1RGUq{3P(+";
                   // $dbName = "db_team1"; // db_team1

                   //$dbServername = "localhost";
                   //$dbUsername = "root";
                   //$dbPassword = "password";
                   //$dbName = "chaheg"; // db_team1

                   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                   if (!$conn)
                   {
                        die("Connection failed: " . mysqli_connect_error());
                   }
                    //echo "Connected Successfully";

                    if(isset($_SESSION['TestID']))
                    {
                        echo "TestID is ".$_SESSION['TestID']."<br>";
                        echo "UserID is ".$_SESSION['UserID']."<br>";
                    }

                    $sql = "SELECT questionid, question FROM testquestions WHERE testid = ".$_SESSION['TestID']." ORDER BY RAND() LIMIT 10;"; //Select 10 random Question IDs and their Questions
                    $result = mysqli_query($conn, $sql);

                        

                    $QuestionIDArray = array();
                    $QuestionTextArray = array();

                    $x=0;
                    if (mysqli_num_rows($result) > 0)
                    {
                         while($row = mysqli_fetch_assoc($result))
                        {
                            $QuestionIDArray[$x] = $row["questionid"];
                            $QuestionTextArray[$x] = $row["question"];
                            $x++;
                        }
                    }

                    print_r($QuestionIDArray);
                    echo "<br>";
                    print_r($QuestionTextArray);
                    echo "<br>";

                    $x=0;
                    $QuestionIDString = "";
                    while($x<count($QuestionIDArray))
                    {
                        if($x != count($QuestionIDArray)-1)
                        {
                            $QuestionIDString = $QuestionIDString.$QuestionIDArray[$x].", ";
                        }
                        else
                        {
                            $QuestionIDString = $QuestionIDString.$QuestionIDArray[$x];
                        }
                        $x++;
                    }

                    echo $QuestionIDString;
                    echo "<br>";
                    $sql2 = "SELECT questionid, answerid, answer, isanswer from testanswers where questionid in (".$QuestionIDString.") ORDER BY questionid, rand();";//get QuestionID, AnswerID, AnswerText, and IsAnswer for questions chosen above
                    echo $sql2;
                    echo "<br>";
                    $result2 = mysqli_query($conn, $sql2);

                    $AnswerIDArray = array();
                    $AnswerTextArray = array();
                    $IsAnswerArray = array();

                    $x=0;
                    if (mysqli_num_rows($result2) > 0)
                    {
                         while($row = mysqli_fetch_assoc($result2))
                        {
                            $AnswerIDArray[$x] = $row["answerid"];
                            $AnswerTextArray[$x] = $row["answer"];
                            $IsAnswerArray[$x] = $row["isanswer"];
                            $x++;
                        }
                    }

                    echo "<br>";
                    print_r($AnswerIDArray);
                    echo "<br>";
                    echo "<br>";
                    print_r($AnswerTextArray);
                    echo "<br>";
                    echo "<br>";
                    print_r($IsAnswerArray);
                    echo "<br>";
                    echo "<br>";


                    echo $QuestionTextArray[0];

                ?>
                <div class=testdiv>

                    <p>hi</p>
                </div>





    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

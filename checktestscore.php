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
                <h2 class="text-center">
                <?php

                    $answerIDChoicesArray = array();
$QuestionIDArray = $_SESSION['QuestionIDArray'];
$QuestionTextArray = $_SESSION['QuestionTextArray'];
$AnswerIDArray = $_SESSION['AnswerIDArray'];
$AnswerTextArray = $_SESSION['AnswerTextArray'];
$IsAnswerArray = $_SESSION['IsAnswerArray'];


if(isset($_POST['Question1']))
{
    $answerIDChoicesArray[0] = $_POST['Question1'];
}
else
{
    $answerIDChoicesArray[0] = "0";
}
if(isset($_POST['Question2']))
{
    $answerIDChoicesArray[1] = $_POST['Question2'];
}
else
{
    $answerIDChoicesArray[1] = "0";
}
if(isset($_POST['Question3']))
{
    $answerIDChoicesArray[2] = $_POST['Question3'];
}
else
{
    $answerIDChoicesArray[2] = "0";
}
if(isset($_POST['Question4']))
{
    $answerIDChoicesArray[3] = $_POST['Question4'];
}
else
{
    $answerIDChoicesArray[3] = "0";
}
if(isset($_POST['Question5']))
{
    $answerIDChoicesArray[4] = $_POST['Question5'];
}
else
{
    $answerIDChoicesArray[4] = "0";
}
if(isset($_POST['Question6']))
{
    $answerIDChoicesArray[5] = $_POST['Question6'];
}
else
{
    $answerIDChoicesArray[5] = "0";
}
if(isset($_POST['Question7']))
{
    $answerIDChoicesArray[6] = $_POST['Question7'];
}
else
{
    $answerIDChoicesArray[6] = "0";
}
if(isset($_POST['Question8']))
{
    $answerIDChoicesArray[7] = $_POST['Question8'];
}
else
{
    $answerIDChoicesArray[7] = "0";
}
if(isset($_POST['Question9']))
{
    $answerIDChoicesArray[8] = $_POST['Question9'];
}
else
{
    $answerIDChoicesArray[8] = "0";
}
if(isset($_POST['Question10']))
{
    $answerIDChoicesArray[9] = $_POST['Question10'];
}
else
{
    $answerIDChoicesArray[9] = "0";
}







$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }




$checkQIDArray = array();
$CorrectAnswerIDArray = array();




$sql = "SELECT questionid, answerid from testanswers where questionid in (".$_SESSION['QuestionIDString'].") AND isanswer = 1;";
$result = mysqli_query($conn, $sql);

$x=0;
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            //$checkQIDArray[$x] = $row["questionid"];
            $CorrectAnswerIDArray[$x] = $row["answerid"];
            $x++;
        }
    }

//echo "</br>";
//print_r($CorrectAnswerIDArray);
//echo "</br>";
//print_r($answerIDChoicesArray);


$counter = 0;
$numberCorrect = 0;
while($counter < count($answerIDChoicesArray))
{
    if($answerIDChoicesArray[$counter] == $CorrectAnswerIDArray[$counter])
    {
        $numberCorrect++;
    }
    $counter++;
}
echo "You got a ".$numberCorrect."/10";

$percent = intval($numberCorrect)*10;




$sql2 = "INSERT INTO Results VALUES(null,".$_SESSION['UserID'].",".$_SESSION['TestID'].",".$percent.", NOW());";
$result2 = mysqli_query($conn, $sql2);
?>



    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>

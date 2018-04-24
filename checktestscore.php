<?php
session_start();
include 'assets/php/config.php';


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
if(isset($_POST['Question2']))
{
	$answerIDChoicesArray[1] = $_POST['Question2'];
}
if(isset($_POST['Question3']))
{
	$answerIDChoicesArray[2] = $_POST['Question3'];
}
if(isset($_POST['Question4']))
{
	$answerIDChoicesArray[3] = $_POST['Question4'];
}
if(isset($_POST['Question5']))
{
	$answerIDChoicesArray[4] = $_POST['Question5'];
}
if(isset($_POST['Question6']))
{
	$answerIDChoicesArray[5] = $_POST['Question6'];
}
if(isset($_POST['Question7']))
{
	$answerIDChoicesArray[6] = $_POST['Question7'];
}
if(isset($_POST['Question8']))
{
	$answerIDChoicesArray[7] = $_POST['Question8'];
}
if(isset($_POST['Question9']))
{
	$answerIDChoicesArray[8] = $_POST['Question9'];
}
if(isset($_POST['Question10']))
{
	$answerIDChoicesArray[9] = $_POST['Question10'];
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

echo "</br>";
print_r($CorrectAnswerIDArray);
echo "</br>";
print_r($answerIDChoicesArray);


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




$sql2 = "INSERT INTO Results VALUES(null,".$_SESSION['UserID'].",".$_SESSION['TestID'].",".$percent.");";
$result2 = mysqli_query($conn, $sql2);
?>
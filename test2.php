<?php
session_start();
include 'assets/php/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAHEG_login_Signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Article-List-1.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar1.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar2.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Center.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>


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



    <div><nav class="navbar navbar-inverse navigation-clean">
    <div class="container">
        <div class="navbar-header"><p class="navbar-brand CHAHEG-logo">CHAHEG <i class="fa fa-stethoscope"></i></p><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation" class="active"><a href="assets/php/logout.php">Sign Out</a></li>
            </ul>
    </div>
    </div>
</nav></div>
    <div class="simple-slider">
        <form>
            <div class="swiper-container" style="height:85vh">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="container question-container">
                            <div class="row well question">
                                <div class="col-md-12">
                                    <h1 id="Question">Heading 1</h1>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 1</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label 1</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 1</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label </label></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        
<!--
                    </div>
                    <div class="swiper-slide">
                        <div class="container question-container">
                            <div class="row well question">
                                <div class="col-md-12">
                                    <h1 id="Question">Heading 2</h1>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 2</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label 2</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 2</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label 2</label></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="swiper-slide">
                        <div class="container question-container">
                            <div class="row well question">
                                <div class="col-md-12">
                                    <h1 id="Question">Heading 3</h1>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 3</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                    <div class="swiper-slide">
                        <div class="container question-container">
                            <div class="row well question">
                                <div class="col-md-12">
                                    <h1 id="Question">Heading 4</h1>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label 4</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                </div>
                                <div class="col-md-5 col-md-offset-0">
                                    <div class="radio"><label><input type="radio">Label</label></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>

-->

                        <div class="Question-submit" inputtype="submit" style="width:100%;"><button class="btn btn-default" type="submit">Submit Test</button></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Article-List-1.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar1.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar2.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Center.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div><nav class="navbar navbar-inverse navigation-clean">
    <div class="container">
        <div class="navbar-header"><p class="navbar-brand CHAHEG-logo">CHAHEG <i class="fa fa-stethoscope"></i></p><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="assets/php/logout.php">Sign Out</a></li>
            </ul>
    </div>
    </div>
</nav></div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">
                    <?php
                 if (isset($_SESSION['UserID'])) {
                     echo $_SESSION['FirstName'];
                 }

              ?> Dashboard</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-md-4 col-sm-6 item"><a href="courses.php"><img class="img-responsive" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Courses</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><a href="results.php"><img class="img-responsive" src="assets/img/building.jpg"></a>
                    <h3 class="name">Account Info</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><a href="results.php"><img class="img-responsive" src="assets/img/loft.jpg"></a>
                    <h3 class="name">Results</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

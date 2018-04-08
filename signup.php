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
                <li role="presentation"><a href="index.html">Sign In</a></li>
            </ul>
    </div>
    </div>
</nav></div>
    <div class="container form-container">
        <div class="row row-login">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <h1 class="text-center">Welcome </h1>
                <div class="well">
                    <h3 class="text-danger">Sign UP</h3>
                    <form action="assets/php/register.php" class="sign-up-form" method="post">
                        <div class="form-group"><label class="control-label">First Name</label><input class="form-control" type="text" required="" name="fname"></div>
                        <div class="form-group"><label class="control-label">Last Name</label><input class="form-control" type="text" required="" name="lname"></div>
                        <div class="form-group"><label class="control-label">Education </label>

                            <select required class="form-control" name="education">

<!--     <option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option>
 -->
                                <option value="Albertus Magnus College">Albertus Magnus College</option>
                                <option value="Central Connecticut State University">Central Connecticut State University</option>
                                <option value="Charter Oak State College">Charter Oak State College</option>
                                <option value="Connecticut College">Connecticut College</option>
                                <option value="Eastern Connecticut State University">Eastern Connecticut State University</option>
                                <option value="Fairfield University">Fairfield University</option>
                                <option value="Goodwin College">Goodwin College</option>
                                <option value="Hartford Seminary">Hartford Seminary</option>
                                <option value="Holy Apostles College and Seminary">Holy Apostles College and Seminary</option>
                                <option value="Lincoln College of New England-Southington">Lincoln College of New England-Southington</option>
                                <option value="Lyme Academy College of Fine Arts">Lyme Academy College of Fine Arts</option>
                                <option value="Mitchell College">Mitchell College</option>
                                <option value="Paier College of Art Inc">Paier College of Art Inc</option>
                                <option value="Post University">Post University</option>
                                <option value="Quinnipiac University">Quinnipiac University</option>
                                <option value="Rensselaer Hartford Graduate Center Inc">Rensselaer Hartford Graduate Center Inc</option>
                                <option value="Sacred Heart University">Sacred Heart University</option>
                                <option value="Southern Connecticut State University">Southern Connecticut State University</option>
                                <option value="St Vincent's College">St Vincent's College</option>
                                <option value="Trinity College">Trinity College</option>
                                <option value="United States Coast Guard Academy">United States Coast Guard Academy</option>
                                <option value="University of Bridgeport">University of Bridgeport</option>
                                <option value="University of Connecticut">University of Connecticut</option>
                                <option value="University of Connecticut-Avery Point">University of Connecticut-Avery Point</option>
                                <option value="University of Connecticut-Stamford">University of Connecticut-Stamford</option>
                                <option value="University of Connecticut-Tri-Campus">University of Connecticut-Tri-Campus</option>
                                <option value="University of Hartford">University of Hartford</option>
                                <option value="University of New Haven">University of New Haven</option>
                                <option value="University of Phoenix-Connecticut">University of Phoenix-Connecticut</option>
                                <option value="University of Saint Joseph">University of Saint Joseph</option>
                                <option value="Wesleyan University">Wesleyan University</option>
                                <option value="Western Connecticut State University">Western Connecticut State University</option>
                                <option value="Yale University">Yale University</option>
                                <option value="Yale-New Haven Hospital Dietetic Internship">Yale-New Haven Hospital Dietetic Internship</option>

                            </select>
                        </div>
                        <div class="form-group"><label class="control-label">Anticipated Year of Graduation</label><input class="form-control" type="date" required="" name="YOG"></div>
                        <div class="form-group"><label class="control-label">Email </label><input class="form-control" type="text" required="" name="email"></div>
                        <div class="form-group"><label class="control-label">Password </label><input class="form-control" type="password" required="" name="passwd"></div>
                        <div class="form-group">
                            <div class="checkbox"><label class="control-label"><input type="checkbox">Remember me</label></div>
                        </div><button class="btn btn-success btn-block" type="submit">Sign Up</button></form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 item text">
                        <h3>CHAHEG </h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">Conecticut Online Nurses Training © 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

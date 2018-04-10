<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar1.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar2.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Login-Center.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-inverse navigation-clean">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="index.html">CHAHEG <i class="fa fa-stethoscope"></i></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="signup.php">Sign Up</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="container form-container">
        <div class="row row-login">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <h1 class="text-center">Welcome </h1>
                <div class="well">
                    <h3 class="text-danger">Login </h3>
                    <form class="sing-in-form" method="POST" action="assets/php/login.php">
                        <div class="form-group"><label class="control-label">Username </label><input class="form-control" type="text" required="" name="uname"></div>
                        <div class="form-group"><label class="control-label">Password </label><input class="form-control" type="password" required="" name="passwd"></div>
                        <div class="form-group">
                            <div class="checkbox"><label class="control-label"><input type="checkbox">Remember me</label></div>
                        </div><button class="btn btn-success btn-block" type="submit">LOGIN </button><a class="btn btn-link center-block" role="button" href="recovery.php">Forgot Password?</a></form>
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
                <p class="copyright">Connecticut Online Nurses Training © 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

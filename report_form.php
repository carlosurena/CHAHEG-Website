<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad-Hoc Reports</title>
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
                <li> <a href="#">Dashboard </a></li>
                <li> <a href="#">Courses</a></li>
                <li> <a href="#">Results</a><a href="#">Account</a><a href="#">Sign Out</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper"></div>
    </div>
    <div class="article-list" style="margin-top:68px;">
        <div class="container-fluid">
            <div class="intro">
                <h2 class="text-center">Ad-Hoc Reports</h2>
                <p class="text-center">Search our database for Student test reports based on institution, test type, and Student ID. </p>
            </div> <br>
            <div class="row">
                <div class="col-sm-2 text-center"></div>
                <div class="col-sm-3 text-center">
                    
                <form method="POST" action="assets/php/report_school.php">
                    <div class="form-group">
                        <label class="control-label">Institution </label>
                        <select required class="form-control" name="education">
                        <option value="All">All</option>    
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
               
                    <div class="form-group"><label class="control-label">Test </label><select required class="form-control" name="testname">
                            <option value="All">All</option>    
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
                                
                        </select></div>
                        <button class="btn btn-success btn-block" type="submit">Search </button>

                    </form>
                </div>
                <div class="col-sm-2 text-center align-middle" style="margin-top:60px">or</div>
                <div class="col-sm-3 text-center">
                <form method="POST" action="assets/php/report_ID.php">
                    <div class="form-group">
                        <label class="control-label">Student ID</label>
                        <input class="form-control" type="text" required="" name="uID">
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Search </button>
                </form>
                </div>
                

                <div class="col-sm-2 text-center"></div>
              </div> <br>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>
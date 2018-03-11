<?php 
  session_start();
  if(isset($_SESSION['username']))
       {
        
        }
        else{
          die('<h2 align="center" style="color:red,font-family:sans-serif">Login Once Again <a href="logout.php">GO Back!</a></h2>');

          }

    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/mstyles.css"> -->
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
   
</head>

<body>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Srms<span>logo </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li class="active" role="presentation"><a class="text-info" href="#">Registration </a></li>
                    <li role="presentation"><a href="#">Event Rules </a></li>
                    <li role="presentation"><a href="#"> Brochoure</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img class="img-circle dropdown-image" src="assets/img/avatar.jpg"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation" class="active"><a href="logout.php">Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group"><a class="list-group-item list-group-item-info active" ><span>Main Profile</span></a><a class="list-group-item" href="single.php"><span>Single Events</span></a><a class="list-group-item" href="team.php"><span> Team Events</span></a></div>
            </div>
            <div class="col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img class="img-responsive" src="images/img (1).jpg" alt="Slide Image"></div>
                        <div class="item"><img src="images/img (2).jpg" alt="Slide Image"></div>
                        <div class="item"><img src="images/img (3).jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
                <h2 class="text-center">Sample Format</h2>
                <div class="alert alert-warning text-justify" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Participation ID Shown Here !</span></div>
                <form>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" required="" placeholder="Email" autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" required="" placeholder="Password" maxlength="10" minlength="6">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpass" required="" placeholder="Confirm Password" maxlength="10" minlength="6">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="college" required="" placeholder="College">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="tel" name="mobile" required="" placeholder="Mobile">
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Submit </button>
                </form>
            </div>
            <div class="col-md-3 hidden-xs">
                <div class="alert alert-info" role="alert">
                    <blockquote>
                        <p>Some Images on the left about ZEST,and Some Important Notice elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous</footer>
                    </blockquote><span> </span></div>
            </div>
            <div class="col-md-12">
                <footer>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 footer-navigation">
                            <h3><a href="#">Srms<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">ZEST </a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                            <p
                            class="company-name">Company Name © 2015 </p>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-contacts">
                            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                <p><span class="new-line-span">NH 24 Nainital Road</span> Abhayapur , Bareilly</p>
                            </div>
                            <div><i class="fa fa-phone footer-contacts-icon"></i>
                                <p class="footer-center-info email text-left"> +91 XXXXXX</p>
                            </div>
                            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                <p> <a href="#" target="_blank">support@company.com</a></p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 footer-about">
                            <h4>About the company</h4>
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                            </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
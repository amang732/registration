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
    <title>Team Event</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/tstyles.css"> -->
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
                    <li role="presentation"><a href="#">Registration </a></li>
                    <li role="presentation"><a href="#">Event Rules</a></li>
                    <li role="presentation"><a href="#"> Brochure</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
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
                <div class="list-group"><a class="list-group-item" href="main.php"><span>Main Profile</span></a><a class="list-group-item" href="single.php"><span>Single Events</span></a><a class="list-group-item list-group-item-info active" ><span> Team Events</span></a></div>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">List Of Events (Team)</h2>
                <form>
                    <div class="form-group">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">First Tab</a></li>
                                <li><a href="#tab-2" role="tab" data-toggle="tab">Second Tab</a></li>
                                <li><a href="#tab-3" role="tab" data-toggle="tab">Third Tab</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="p1" required="" placeholder="Participant 1" autofocus="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="p2" required="" placeholder="Participant 2" autofocus="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="p3" required="" placeholder="Participant 3" autofocus="">
                                        </div>
                                        <button class="btn btn-warning btn-block" type="button">Button</button>
                                    </form>
                                    <p class="text-justify text-muted">Enter Valid Participation ID.</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <p>Second tab content.</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-3">
                                    <p>Third tab content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-danger">Type 2 Event Format</h3>
                    <div class="form-group">
                        <div><a class="btn btn-primary btn-block" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" role="button" href="#collapse-1">Team Event 1</a>
                            <div class="collapse" id="collapse-1">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p1" required="" placeholder="Participant 1" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p2" required="" placeholder="Participant 2" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p3" required="" placeholder="Participant 3" autofocus="">
                                    </div>
                                    <button class="btn btn-warning btn-block" type="button">Button</button>
                                </form>
                                <p>Collapse content.</p>
                            </div>
                        </div>
                        <div><a class="btn btn-default btn-block" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" role="button" href="#collapse-2">Team Event Name 1</a>
                            <div class="collapse" id="collapse-2">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p1" required="" placeholder="Participant 1" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p2" required="" placeholder="Participant 2" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p3" required="" placeholder="Participant 3" autofocus="">
                                    </div>
                                    <button class="btn btn-warning" type="button">Button</button>
                                </form>
                                <p>Collapse content.</p>
                            </div>
                        </div>
                        <div><a class="btn btn-default btn-block" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" role="button" href="#collapse-3">Team Event Name 2</a>
                            <div class="collapse" id="collapse-3">
                                <p>Collapse content.</p>
                            </div>
                        </div>
                        <div><a class="btn btn-default btn-block" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" role="button" href="#collapse-4">Team Event NAme </a>
                            <div class="collapse" id="collapse-4">
                                <p>Collapse content.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 hidden-xs">
                <div class="alert alert-success" role="alert">
                    <blockquote>
                        <p>Some Notice or Information sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous</footer>
                    </blockquote><span> </span></div>
            </div>
            <div class="col-md-12">
                <footer>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 footer-navigation">
                            <h3><a href="#">Srms<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · Zest· </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                            <p class="company-name">Company Name © 2015 </p>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-contacts">
                            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                <p><span class="new-line-span">NH 24 Nainital Road</span> Abhayapur,Barielly</p>
                            </div>
                            <div><i class="fa fa-phone footer-contacts-icon"></i>
                                <p class="footer-center-info email text-left">+91 XXXXXXX</p>
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
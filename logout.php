<?php
session_start();
session_destroy();
header('Location: login.html');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Erorr</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">


<style type="text/css">
	.error_pagenotfound b {
    display: block;
    font-size: 40px;
    line-height: 50px;
    color: #999;
    margin: 0;
    font-weight: 300;
}

.fa-arrow-circle-left:before {
    content: "\f0a8";
}

a.button-back {
    border-radius: 0px;
    text-transform: uppercase;
    font-size: 16px;
    padding: 15px 25px;
    margin-top: 15px;
    background: #8cc732;
    color: #fff;
    font-weight: 600;
}
#animate-arrow {
    position: relative;
    top: 15px;
    left: 0px;
    animation: move 1s ease infinite;
    margin-top: 150px;
    color: red;
}
.error_pagenotfound strong {
    display: block;
    font-size: 145px;
    line-height: 100px;
    color: #999;
    font-weight: bold;
    margin-bottom: 10px;
    text-shadow: 5px 5px 1px #eaeaea;
}
.error_pagenotfound em {
    display: block;
    font-size: 18px;
    color: #8cc732;
    margin: 15px 0;
    font-style: normal;
}
a.button-back:hover {
    background: #000000;
    color: #fff;
}

</style>
</head>
<body>
         
         <!--Container -->
  <div class="error-page">
    <div class="container" align="center">
      <div class="error_pagenotfound"> <strong>4<span id="animate-arrow">0</span>4 </strong> <br />
        <b>Oops... Page Not Found!</b> <em>Sorry the Page Could not be Found here.</em>
        <p>Try using the button below to go to main page of the site</p>
        <br />
        <a href="" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Go to Back</a> </div>
      <!-- end error page notfound --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 


</body>
</html>
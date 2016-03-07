<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en-US"  xmlns:ng="http://angularjs.org" id="ng-app" ng-app="edusar">
<head>
  <title>edusar - Online IT Training</title>
  <meta charset="utf-8">
   <meta name="description" content='Online Training. Learn Java, Spring framework, PHP, MySql, AngularJS, Bootstrap online.'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="./css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <script src="./libs/angular.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/mainController.js"></script>
</head>
<body >
<div class="container-fluid" ng-controller="mainController">
<div class="row">

<div class="col-sm-12" style="padding:0px;">

<nav class="navbar navbar-inverse navbar-fixed-top"  style="background-color:rgba(3,3,3,0.8);border-radius:0px;">
  <div class="container-fluid" >
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><span id="logo">eduSar</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
    
    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li><a href="fees.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Fees</a></li>
    <li><a href="contactUs.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Contact Us</a></li>
    <?php 
    if(!isset($_SESSION['isLoginValid']) && $_SESSION['isLoginValid'] != 1)
    {?>
    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign In</a></li>
     <?php
    }
    else 
    {?>
    <li><a href="student/home.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['user']['fname'];?></a></li>
    <?php 
    }
    ?>
    </ul>
    </div>
  </div>
</nav>


<div class="row">
<div class="col-sm-12 screenBg" align="center" >
<!-- Carousel -->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./image/img1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="./image/img2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="./image/img3.jpg" alt="Flower">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- End Carousel -->
</div>
</div>
<div class="row" style="margin-top:3%;">
<div class="col-sm-1" align="center"></div>
<div class="col-sm-2 menuSection" align="center" >
<img class="subIcons" src="./image/teacherIcon.jpg">
<br><br>
<div align="center">
<div class="iconDisc">
<b>PHP and MySQL</b>
<br><br>
Learn the most widely used technology for Web development.
<br>
<br><br>
</div>
<a href="phpMain.php"><button type="button" class="btn btn-success btn-lg">Get Started</button></a>
<br><br>
</div>
</div>
<div class="col-sm-2 menuSection" align="center" >
<img class="subIcons" src="./image/studentIcon.jpg">
<br><br>
<div align="center">
<div class="iconDisc">
<b>JAVA</b>
<br><br>
Most popular and evergreen language. Currently 3 billion devices run on Java !!!
<br>
<br><br>
</div>
<a href="javaMain.php"><button type="button" class="btn btn-success btn-lg">Get Started</button></a>
<br><br>
</div>
</div>
<div class="col-sm-2 menuSection" align="center" >
<img class="subIcons" src="./image/spring.jpg">
<br><br>
<div align="center">
<div class="iconDisc">
<b>Spring Framework</b>
<br><br>
Agile, robust and secure. That makes Spring first choice for business applications.
<br>
<br><br>
</div>
<a href="springMain.php"><button type="button" class="btn btn-success btn-lg">Get Started</button></a>
<br><br>
</div>
</div>
<div class="col-sm-2 menuSection" align="center" >
<img class="subIcons" src="./image/android.jpg">
<br><br>
<div align="center">
<div class="iconDisc">
<b>Android</b>
<br><br>
The future is in your hand. Learn how to build cool apps.
 START UP!!!
<br>
<br><br>
</div>
<button type="button" class="btn btn-success btn-lg">Get Started</button>
<br><br>
</div>
</div>
<div class="col-sm-2 menuSection" align="center" >
<img class="subIcons"  src="./image/angular.jpg">
<br><br>
<div align="center">
<div class="iconDisc">
<b>Angular</b>
<br><br>
The UI framework by Google!!! Most popularly used and also cool to learn.
<br>
<br><br>
</div>
<a href="angularMain.php"><button type="button" class="btn btn-success btn-lg">Get Started</button></a>
<br><br>
</div>
</div>
<div class="col-sm-1" align="center"></div>

</div>


<div class="jumbotron">
<div style="width:29%;display:inline-block;border:0px solid #000;float:left;">
<img src="./image/oca.jpg" style="width:80%;border:0px solid #000;">
</div>
<div style="width:70%;display:inline-block;border:0px solid #000;">
  <h1>Oracle Java Certifications</h1> 
  <br><br>
  <p>Join our OCJP program and become an Oracle Certified Java Programmer.
Survey shows that Oracle certified associates are 97% more likely to get hired or promoted.</p>
</div>
</div>
<div class="jumbotron">

<div style="width:70%;display:inline-block;border:0px solid #000;">
  <h1>Interview Preparation</h1> 
  <br><br>
  <p>Join our career preparation course and practice aptitude and interview questions.
Almost all fresher jobs give 60% weightage to aptitude and HR interview</p>
</div>
<div style="width:29%;display:inline-block;border:0px solid #000;float:right;">
<img src="./image/career.jpg" style="width:80%;border:0px solid #000;">
</div>
</div>




</div>



</div>

</div>

<div id="enquiryForm"  data-toggle="modal" data-target="#myModal">
<br>
Query? Leave us a message.
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" ng-controller="enquiryCtrl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enquiry form</h4>
      </div>
      <div class="modal-body">
  <div class="row">
  <div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" required="required" ng-model="name"  placeholder="Name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" required="required" ng-model="email" placeholder="Email address">
</div>
</div>

</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<textarea name="message" id="message" required="required" ng-model="msg"  class="form-control" rows="8" placeholder="Message"></textarea>
</div>
<div class="form-group">
<button type="button" data-dismiss="modal"  ng-click="submitReg()"  class="btn btn-danger btn-lg" ng-disabled="isSubmitEnable();">Send Message</button>
</div>
</div>
</div>
</form>
</div> 
      </div>
    </div>

  </div>
</div>
<!-- end model -->
<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>
</body>
</html>

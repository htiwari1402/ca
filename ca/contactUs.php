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
      
    </ul>
    </div>
  </div>
</nav>
</div></div></div>
<div class="container-fluid" style="margin-top: 100px;margin-left:2%;">
<div class="row">
<div class="col-sm-5">
<h1>Contact Form</h1>
<br>
<p>Please enter your message and details below. We'll follow soon !!!</p>
<br><br>
<div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" required="required" placeholder="Name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" required="required" placeholder="Email address">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-danger btn-lg">Send Message</button>
</div>
</div>
</div>
</form>
</div> 
<div class="col-sm-3"></div>
<div class="col-sm-4">
</div>

</div>
<h1>Call Us</h1>
<br>
<div class="row">
<div class="col-md-12">
<span class="glyphicon glyphicon-earphone"></span> +91 9920614587<br>
<span class="glyphicon glyphicon-earphone"></span> +91 8879699661<br>
<span class="glyphicon glyphicon-earphone"></span>+91 9039197423<br>
</div>
</div>
</div> 
</div> 
</div>
<br><br><br>
<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;margin-top:1%;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>

</body>
</html>

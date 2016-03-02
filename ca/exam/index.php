<!DOCTYPE html>
<html lang="en-US"  xmlns:ng="http://angularjs.org" id="ng-app" ng-app="edusar">
<head>
  <title>eduSar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="./css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
 <!--  <link rel="stylesheet" href="http://textangular.com/css/style.css" type="text/css">
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
    
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <script src="./libs/edusar-thirdparty.js"></script>
  <script src="liquidFillGauge.js" language="JavaScript"></script>
  <script src="./js/app.js"></script>
  <script src="./js/mainController.js"></script>
   
   <!--  <script src='./libs/texted/dist/textAngular-rangy.min.js'></script>
    
        <script src='./libs/texted/dist/textAngular-sanitize.min.js'></script>
    
        <script src='./libs/texted/dist/textAngular.min.js'></script> -->
       <!--  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js" type="text/javascript"></script>
    <script src="http://resources.infolinks.com/js/infolinks_main.js" type="text/javascript"></script> -->
</head>
<body >
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
<div class="container-fluid"   ng-view="">
<div class="row" ng-controller="examController"  style="margin-top:100px;width:60%;">
<div class="alert alert-success" ng-show="success">
  <strong>Success!</strong> Exam created successfully !!!.
</div>
<input type="text"   class="form-control" id="examName" ng-model="exam.name" placeholder="Exam Name">
<br>
<input type="text"   class="form-control" id="subject" ng-model="exam.subject" placeholder="Subject">
<br>
<input type="text"   class="form-control" id="durationHrs" ng-model="exam.durationHrs" placeholder="Duration in Hrs">
<br>
<input type="text"   class="form-control" id="durationMin" ng-model="exam.durationMin" placeholder="Duration in Min">
<br><br>
<button type="submit" class="btn btn-danger btn-lg" ng-click="createExam();">Create Exam</button>
</div>
</div>
<br><br><br>
<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>
</body>
</html>


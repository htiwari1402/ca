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
<body onresize="resizeFunc();">

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
<div class="container-fluid" style="margin-top:50px;">
<div class="jumbotron">

<div style="width:70%;display:inline-block;border:0px solid #000;">
  <h1>PHP MySQL</h1> 
  <br><br>
  <p>PHP is a server side scripting language which when coupled with MySQL as database form a very powerful
  Model and Application layer of Web Applications. About 90% websites are made of PHP MySQL.</p>
  <br><br>
  <a href="registration.php?course=PHP MySQL"><button type="button" class="btn btn-success btn-lg">Register for the course</button></a>
</div>
<div style="width:29%;display:inline-block;border:0px solid #000;float:right;">
<img src="./image/phpmysql.jpg" style="width:80%;border:0px solid #000;">
</div>
</div>
<div class="container-fluid" style="margin-top:50px;">
<div >
<h1>Course Content</h1>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Core PHP</a></li>
  <li><a data-toggle="tab" href="#menu1">Advance PHP</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Core PHP
    <span style="display:inline-block;float:right;">Fee: Rs 6000/-</span></h3>
    <p><h4>
<ol class="list-group">
<li class="list-group-item">PHP HOME</li>
<li class="list-group-item">PHP Intro</li>
<li class="list-group-item">PHP Install</li>
<li class="list-group-item">PHP Syntax</li>
<li class="list-group-item">PHP Variables</li>
<li class="list-group-item">PHP Echo / Print</li>
<li class="list-group-item">PHP Data Types</li>
<li class="list-group-item">PHP Strings</li>
<li class="list-group-item">PHP Constants</li>
<li class="list-group-item">PHP Operators</li>
<li class="list-group-item">PHP If...Else...Elseif</li>
<li class="list-group-item">PHP Switch</li>
<li class="list-group-item">PHP While Loops</li>
<li class="list-group-item">PHP For Loops</li>
<li class="list-group-item">PHP Functions</li>
<li class="list-group-item">PHP Arrays</li>
<li class="list-group-item">PHP Sorting Arrays</li>
<li class="list-group-item">PHP Superglobals</li>

<li class="list-group-item">PHP Forms</li>
<li class="list-group-item">PHP Form Handling</li>
<li class="list-group-item">PHP Form Validation</li>
<li class="list-group-item">PHP Form Required</li>
<li class="list-group-item">PHP Form URL/E-mail</li>
<li class="list-group-item">PHP Form Complete</li>
</ol>
</h4></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Advance PHP
    <span style="display:inline-block;float:right;">Fee: Rs 4500/-</span></h3>
    <p><h4>
<ol class="list-group">
<li class="list-group-item">PHP Arrays Multi</li>
<li class="list-group-item">PHP Date and Time</li>
<li class="list-group-item">PHP Include</li>
<li class="list-group-item">PHP File Handling</li>
<li class="list-group-item">PHP File Open/Read</li>
<li class="list-group-item">PHP File Create/Write</li>
<li class="list-group-item">PHP File Upload</li>
<li class="list-group-item">PHP Cookies</li>
<li class="list-group-item">PHP Sessions</li>
<li class="list-group-item">PHP Filters</li>
<li class="list-group-item">PHP Filters Advanced</li>
<li class="list-group-item">PHP Error Handling</li>
<li class="list-group-item">PHP Exception</li>

<li class="list-group-item">MySQL Database</li>
<li class="list-group-item">MySQL Database</li>
<li class="list-group-item">MySQL Connect</li>
<li class="list-group-item">MySQL Create DB</li>
<li class="list-group-item">MySQL Create Table</li>
<li class="list-group-item">MySQL Insert Data</li>
<li class="list-group-item">MySQL Get Last ID</li>
<li class="list-group-item">MySQL Insert Multiple</li>
<li class="list-group-item">MySQL Prepared</li>
<li class="list-group-item">MySQL Select Data</li>
<li class="list-group-item">MySQL Delete Data</li>
<li class="list-group-item">MySQL Update Data</li>
<li class="list-group-item">MySQL Limit Data</li>

<li class="list-group-item">PHP - XML</li>
<li class="list-group-item">PHP XML Parsers</li>
<li class="list-group-item">PHP SimpleXML Parser</li>
<li class="list-group-item">PHP SimpleXML - Get</li>
<li class="list-group-item">PHP XML Expat</li>
<li class="list-group-item">PHP XML DOM</li>

<li class="list-group-item">PHP - AJAX</li>
<li class="list-group-item">AJAX Intro</li>
<li class="list-group-item">AJAX PHP</li>
<li class="list-group-item">AJAX Database</li>
<li class="list-group-item">AJAX XML</li>
<li class="list-group-item">AJAX Live Search</li>
<li class="list-group-item">AJAX RSS Reader</li>
<li class="list-group-item">AJAX Poll</li>
</ol>
</h4></p>
  </div>
</div>



</div>
</div>
</div>
<div class="navbar navbar-inverse" align="center" style="border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>
</body>
</html>

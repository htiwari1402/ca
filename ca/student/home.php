<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en-US"  xmlns:ng="http://angularjs.org" id="ng-app" ng-app="home">
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
  <script src="../libs/angular.js"></script>
  <script src="./app/app.js"></script>
  <script src="./app/mainController.js"></script>
</head>
<body >
<div class="container-fluid" ng-controller="headController">
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
    
    <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <?php 
    if(!isset($_SESSION['isLoginValid']) && $_SESSION['isLoginValid'] != 1)
    {?>
    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign In</a></li>
     <?php
    }
    else 
    {?>
    <li><a href="./home.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['user']['fname'];?></a></li>
   <li><a  ng-click="logout();"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li> 
    <?php 
    }
    ?>
    </ul>
    </div>
  </div>
</nav>
</div></div></div>



<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>
</body>
</html>


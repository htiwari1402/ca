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
<div class="container-fluid">
<div class="jumbotron" style="background-color:#d60;color:#fff;margin-top:100px;border-radius:30px;">
    <h1>Discount</h1> 
    <p>Get 15% discount on all courses on referals</p> 
    <p>Note : 1 person can be referred by 1 person only. Although one person can refer many person.
    <b>(You can get 100% discount. Isn't it great ? !!)</b></p> 
  </div>
</div>
<div class="container-fluid" style="">
<div class="row" style="margin-top:2%;">
<div class="col-sm-3 feeSection">
<div class="feePad" align="center">
<img class="subIcons" src="./image/teacherIcon.jpg">
<br><br>
<a href="phpMain.php"><button type="button" class="btn btn-success btn-sm">View Course</button></a>
<br>
<table style="margin-top:20px;">
<tr><td>Core PHP&nbsp;&nbsp;</td><td align="right">Rs 6000</td></tr>
<tr><td>Advance PHP&nbsp;&nbsp;</td><td align="right">Rs 4500</td></tr>
<tr><td>Discount&nbsp;&nbsp;</td><td align="right">Rs 500</td></tr>
<tr><td><hr></td><td><hr></td></tr>
<tr><td>Total&nbsp;&nbsp;</td><td align="right">Rs 10000</td></tr>
</table>
</div>
</div><br><br><br>
<div class="col-sm-3 feeSection">
<div class="feePad" align="center">
<img class="subIcons" src="./image/studentIcon.jpg">
<br><br>
<a href="javaMain.php"><button type="button" class="btn btn-success btn-sm">View JAVA Course</button></a>
<a href="springMain.php"><button type="button" class="btn btn-success btn-sm">View Spring Course</button></a>
<br>
<table style="margin-top:20px;">
<tr><td>Core JAVA&nbsp;&nbsp;</td><td align="right">Rs 6000</td></tr>
<tr><td>Advance JAVA&nbsp;&nbsp;</td><td align="right">Rs 4000</td></tr>
<tr><td>Spring framework&nbsp;&nbsp;</td><td align="right">Rs 7000</td></tr>
<tr><td>Discount&nbsp;&nbsp;</td><td align="right">Rs 2500</td></tr>
<tr><td><hr></td><td><hr></td></tr>
<tr><td>Total&nbsp;&nbsp;</td><td align="right">Rs 15500</td></tr>
</table>
</div>
</div><br><br><br>
<div class="col-sm-3 feeSection">
<div class="feePad" align="center">
<img class="subIcons" src="./image/android.jpg">
<br><br>
<a href="javaMain.php"><button type="button" class="btn btn-success btn-sm">View Android Course</button></a>
<br>
<table style="margin-top:20px;">
<tr><td>Basic Android&nbsp;&nbsp;</td><td align="right">Rs 6000</td></tr>
<tr><td>Advance Android&nbsp;&nbsp;</td><td align="right">Rs 3500</td></tr>
<tr><td>Discount&nbsp;&nbsp;</td><td align="right">Rs 500</td></tr>
<tr><td><hr></td><td><hr></td></tr>
<tr><td>Total&nbsp;&nbsp;</td><td align="right">Rs 9000</td></tr>
</table>
</div>
</div><br><br><br>
<div class="col-sm-3 feeSection">
<div class="feePad" align="center">
<img class="subIcons"  src="./image/angular.jpg">
<br><br>
<a href="angularMain.php"><button type="button" class="btn btn-success btn-sm">View Course</button></a>
<br>
<table style="margin-top:20px;">
<tr><td>Angular JS&nbsp;&nbsp;</td><td align="right">Rs 7000</td></tr>
<tr><td>Bootstrap&nbsp;&nbsp;</td><td align="right">Rs 3500</td></tr>
<tr><td>Discount&nbsp;&nbsp;</td><td align="right">Rs 500</td></tr>
<tr><td><hr></td><td><hr></td></tr>
<tr><td>Total&nbsp;&nbsp;</td><td align="right">Rs 10000</td></tr>
</table>
</div>
</div><br><br><br>

</div>
</div>

<br><br><br>
<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;margin-top:1%;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>

</body>
</html>

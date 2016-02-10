<?php 
  $course =  $_REQUEST['course'];
?>
<!DOCTYPE html>
<html lang="en-US"  xmlns:ng="http://angularjs.org" id="ng-app" ng-app="edusar">
<head>
  <title>eduSar</title>
  <meta charset="utf-8">
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
    </div>
  </div>
</nav>
</div></div></div>
<div class="container" style="margin-top:100px;" ng-controller="regController">
<div class="alert alert-success" ng-show="success">
  <strong>Success!</strong> You are registered !!!.
</div>
  <form class="form-horizontal" role="form">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" ng-model="fn" placeholder="Enter First Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" ng-model="ln"  placeholder="Enter Last Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Contact No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="email"  ng-model="contactNo"  placeholder="Enter Contact No">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email"  ng-model="email"  placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">College/University:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" ng-model="inst"  placeholder="Enter your educational institution">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Year/Semester:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="email"  ng-model="sem"  placeholder="Enter year/semester">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Course:</label>
      <div class="col-sm-10">
        <input type="text"   class="form-control" id="course" ng-model="course" placeholder="Enter Course"
        disabled ng-init="course = '<?php  echo $course;?>' " >
      </div>
    </div>
    <div class="form-group">
            <form>
    <label class="control-label col-sm-2" >Upload your resume:</label>
    <div class="col-sm-10"><input type="file" name="upl" id="upl" ng-model="file" />
    <br>
    <div id="drop-box">
    <p>Select Files</p>
    </div>
    </div>
    
      </form>
    </div>
    
    <div >
      </div>
      <div class="alert alert-warning" ng-show="isSubmitEnable();">
  			<strong>Alert!</strong> Please Fill the complete form to register !!!.
	</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger btn-lg" ng-click="submitReg();"  ng-disabled="isSubmitEnable();">Submit</button>
      </div>
    </div>
  </form>
</div>


<br><br><br>
<div class="navbar navbar-inverse" align="center" style="clear:both;border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;margin-top:1%;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>

</body>
</html>

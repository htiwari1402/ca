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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
    </div>
  </div>
</nav>
<div class="container-fluid" style="margin-top:50px;">
<div class="jumbotron">

<div style="width:70%;display:inline-block;border:0px solid #000;">
  <h1>Spring Framework</h1> 
  <br><br>
  <p>The Spring Framework provides a comprehensive programming and configuration model for modern Java-based enterprise applications - on any kind of deployment platform. A key element of Spring is infrastructural support at the application level: Spring focuses on the "plumbing" of enterprise applications so that teams can focus on application-level business logic, without unnecessary ties to specific deployment environments.</p>
  <br><br>
  <a href="registration.php?course=Spring Framework"><button type="button" class="btn btn-success btn-lg">Register for the course</button></a>
</div>
<div style="width:29%;display:inline-block;border:0px solid #000;float:right;">
<img src="./image/springLogo.jpg" style="width:80%;border:0px solid #000;">
</div>
</div>
<div class="container-fluid" style="margin-top:50px;">
<div >
<h1>Course Content</h1>
<h3>Fee Structure Rs 5000/-</h3>

<ol class="list-group">
<li class="list-group-item">	What is Spring 		</li>
<li class="list-group-item">	Spring Modules 		</li>
<li class="list-group-item">	Spring Application 		</li>
<li class="list-group-item">	Spring in Myeclipse 		</li>
<li class="list-group-item">	Spring in Eclipse 		</li>
<li class="list-group-item">	Constructor Injection 			</li>
<li class="list-group-item">	CI Dependent Object 			</li>
<li class="list-group-item">	CI with collection 			</li>
<li class="list-group-item">	CI with Map 			</li>
<li class="list-group-item">	CI Inheriting Bean 			</li>
<li class="list-group-item">	Setter Injection 			</li>
<li class="list-group-item">	SI Dependent Object 			</li>
<li class="list-group-item">	SI with Collection 			</li>
<li class="list-group-item">	SI with Map 			</li>
<li class="list-group-item">	CI vs SI 			</li>
<li class="list-group-item">	Autowiring 			</li>
<li class="list-group-item">	Factory Method 			</li>
<li class="list-group-item">	AOP Terminology 			</li>
<li class="list-group-item">	AOP Implementations 			</li>
<li class="list-group-item">	Pointcut 			</li>
<li class="list-group-item">	Advices 			</li>
<li class="list-group-item">	JdbcTemplate Example 			</li>
<li class="list-group-item">	PreparedStatement 			</li>
<li class="list-group-item">	ResultSetExtractor 			</li>
<li class="list-group-item">	RowMapper 			</li>
<li class="list-group-item">	NamedParameter 			</li>
<li class="list-group-item">	SimpleJdbcTemplate 			</li>
<li class="list-group-item">	Spring with Hibernate 			</li>
<li class="list-group-item">	Spring with JPA 			</li>
<li class="list-group-item">	SpEL Examples 			</li>
<li class="list-group-item">	Operators in SpEL 			</li>
<li class="list-group-item">	variable in SpEL 			</li>

</ol>



</div>
</div>
</div>
<div class="navbar navbar-inverse" align="center" style="border-radius:0px;margin-bottom:0px;padding-top:10px;color:#999;font-size:14px;">
Copyright 2016 &copy; edusar . All rights reserved.
</div>
</body>
</html>

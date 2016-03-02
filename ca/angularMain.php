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
  <h1>Angular & Bootstrap</h1> 
  <br><br>
  <p>Angular JS and bootstrap form state of art UI framework. AngularJS, a ligtning fast JS framework when coupled with Bootstrap,
  a responsive UI framework result in fast, reliable, responsible web apps.</p>
  <br><br>
  <a href="registration.php?course=Angular Bootstrap"><button type="button" class="btn btn-success btn-lg">Register for the course</button></a>
</div>
<div style="width:29%;display:inline-block;border:0px solid #000;float:right;">
<img src="./image/uiLogo.jpg" style="width:80%;border:0px solid #000;">
</div>
</div>
<div class="container-fluid" style="margin-top:50px;">
<div >
<h1>Course Content</h1>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Angular JS</a></li>
  <li><a data-toggle="tab" href="#menu1">Bootstrap</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Angular JS
    <span style="display:inline-block;float:right;">Fee: Rs 7000/-</span></h3>
    <p><h4>
<ol class="list-group">
<li class="list-group-item">	 Introduction to AngularJS			</li>
<li class="list-group-item">	 Our first AngularJS application			</li>
<li class="list-group-item">	 Single Page Applications			</li>
<li class="list-group-item">	 Controllers			</li>
<li class="list-group-item">	 Models			</li>
<li class="list-group-item">	 Views			</li>
<li class="list-group-item">	 Expressions			</li>
<li class="list-group-item">	 Filters			</li>
<li class="list-group-item">	 Scopes			</li>
<li class="list-group-item">	 Angular Forms			</li>
<li class="list-group-item">	 Ajax, Data, and Angular			</li>
<li class="list-group-item">	 Directives			</li>
<li class="list-group-item">	 Testing in Angular			</li>
</ol>
</h4></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Bootstrap
    <span style="display:inline-block;float:right;">Fee: Rs 3500/-</span></h3>
    <p><h4>
<ol class="list-group">
<li class="list-group-item">	BS HOME		</li>
			<li class="list-group-item">	BS Get Started		</li>
			<li class="list-group-item">	BS Grid Basic		</li>
			<li class="list-group-item">	BS Typography		</li>
			<li class="list-group-item">	BS Tables		</li>
			<li class="list-group-item">	BS Images		</li>
			<li class="list-group-item">	BS Jumbotron		</li>
			<li class="list-group-item">	BS Wells		</li>
			<li class="list-group-item">	BS Alerts		</li>
			<li class="list-group-item">	BS Buttons		</li>
			<li class="list-group-item">	BS Button Groups		</li>
			<li class="list-group-item">	BS Glyphicons		</li>
			<li class="list-group-item">	BS Badges/Labels		</li>
			<li class="list-group-item">	BS Progress Bars		</li>
			<li class="list-group-item">	BS Pagination		</li>
			<li class="list-group-item">	BS Pager		</li>
			<li class="list-group-item">	BS List Groups		</li>
			<li class="list-group-item">	BS Panels		</li>
			<li class="list-group-item">	BS Dropdowns		</li>
			<li class="list-group-item">	BS Collapse		</li>
			<li class="list-group-item">	BS Tabs/Pills		</li>
			<li class="list-group-item">	BS Navbar		</li>
			<li class="list-group-item">	BS Forms		</li>
			<li class="list-group-item">	BS Inputs		</li>
			<li class="list-group-item">	BS Inputs 2		</li>
			<li class="list-group-item">	BS Input Sizing		</li>
			<li class="list-group-item">	BS Carousel		</li>
			<li class="list-group-item">	BS Modal		</li>
			<li class="list-group-item">	BS Tooltip		</li>
			<li class="list-group-item">	BS Popover		</li>
			<li class="list-group-item">	BS Scrollspy		</li>
			<li class="list-group-item">	BS Affix		</li>
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

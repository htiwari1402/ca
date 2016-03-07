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
<body>
    <div class="container-fluid" style="border: 1px solid #077862;;width:40%;margin-top:10%;padding:20px;border-radius:20px;">
        <div class="row" align="center" >
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <form class="form-horizontal" role="form" method="post" action="student/login.php">
                <div class="form-group">
                <label class="control-label col-sm-2" for="text">Username:</label>
                    <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" ng-model="username" name="username"  placeholder="Enter Username">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                    <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" ng-model="password" name="password" placeholder="Enter Password">
                </div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Sign In">
            </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>

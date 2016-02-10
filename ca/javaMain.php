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
  <h1>Java</h1> 
  <br><br>
  <p>Java is the most popular and most widely used programming languages. Over 3 billion devices use Java.
  </p>
  <br><br>
  <a href="registration.php?course=JAVA"><button type="button" class="btn btn-success btn-lg">Register for the course</button></a>
</div>
<div style="width:29%;display:inline-block;border:0px solid #000;float:right;">
<img src="./image/java.jpg" style="width:80%;border:0px solid #000;">
</div>
</div>
<div class="container-fluid" style="margin-top:50px;">
<div >
<h1>Course Content</h1>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Core JAVA</a></li>
  <li><a data-toggle="tab" href="#menu1">Advance JAVA</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Core Java
    <span style="display:inline-block;float:right;">Fee: Rs 6000/-</span></h3>
    <p><h4>
   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <h3>Basics of Java</h3>
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      <ol class="list-group">      
<li class="list-group-item">	Java - What, Where and Why? 				</li>
<li class="list-group-item">	History and Features of Java 				</li>
<li class="list-group-item">	Internals of Java Program				</li>
<li class="list-group-item">	Difference between JDK,JRE and JVM 				</li>
<li class="list-group-item">	Internal Details of JVM 				</li>
<li class="list-group-item">	Variable and Data Type				</li>
<li class="list-group-item">	Unicode System 				</li>
<li class="list-group-item">	Naming Convention				</li>
 </ol>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <h3>OOPS Conecpts</h3>
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
       <ol class="list-group">  
      <li class="list-group-item">	Advantage of OOPs				</li>
<li class="list-group-item">	Object and Class				</li>
<li class="list-group-item">	Method Overloading				</li>
<li class="list-group-item">	Constructor				</li>
<li class="list-group-item">	static variable, method and block 				</li>
<li class="list-group-item">	this keyword				</li>
<li class="list-group-item">	Inheritance (IS-A)				</li>
<li class="list-group-item">	Aggregation and Composition(HAS-A)				</li>
<li class="list-group-item">	Method Overriding				</li>
<li class="list-group-item">	Covariant Return Type				</li>
<li class="list-group-item">	super keyword				</li>
<li class="list-group-item">	Instance Initializer block				</li>
<li class="list-group-item">	final keyword				</li>
<li class="list-group-item">	Runtime Polymorphism				</li>
<li class="list-group-item">	static and Dynamic binding				</li>
<li class="list-group-item">	Abstract class and Interface				</li>
<li class="list-group-item">	Downcasting with instanceof operator				</li>
<li class="list-group-item">	Package and Access Modifiers				</li>
<li class="list-group-item">	Encapsulation				</li>
<li class="list-group-item">	Object class 				</li>
<li class="list-group-item">	Object Cloning				</li>
<li class="list-group-item">	Java Array				</li>
<li class="list-group-item">	Call By Value and Call By Reference				</li>
<li class="list-group-item">	strictfp keyword				</li>
<li class="list-group-item">	Creating API Document				</li>
      </ol>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <h3>String Handling</h3>
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	String : What and Why?				</li>
<li class="list-group-item">	Immutable String 				</li>
<li class="list-group-item">	String Comparison 				</li>
<li class="list-group-item">	String Concatenation 				</li>
<li class="list-group-item">	Substring 				</li>
<li class="list-group-item">	Methods of String class				</li>
<li class="list-group-item">	StringBuffer class 				</li>
<li class="list-group-item">	StringBuilder class 				</li>
<li class="list-group-item">	Creating Immutable class				</li>
<li class="list-group-item">	toString method 				</li>
<li class="list-group-item">	StringTokenizer class				</li>
      
      </ol>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <h3>Exception Handling
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	Exception Handling : What and Why? 					</li>
<li class="list-group-item">	try and catch block 					</li>
<li class="list-group-item">	Multiple catch block 					</li>
<li class="list-group-item">	Nested try 					</li>
<li class="list-group-item">	finally block 					</li>
<li class="list-group-item">	throw keyword 					</li>
<li class="list-group-item">	Exception Propagation 					</li>
<li class="list-group-item">	throws keyword 					</li>
<li class="list-group-item">	Exception Handling with Method Overriding					</li>
<li class="list-group-item">	Custom Exception 					</li>
      </ol>
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        <h3>Nested Classes
        
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	Nested Class : What and Why?					</li>
<li class="list-group-item">	Member Inner class 					</li>
<li class="list-group-item">	Annonymous Inner class 					</li>
<li class="list-group-item">	Local Inner class 					</li>
<li class="list-group-item">	static nested class 					</li>
<li class="list-group-item">	Nested Interface 					</li>
      
      </ol>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        <h3>Input and output        
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	FileOutputStream & FileInputStream 					</li>
<li class="list-group-item">	ByteArrayOutputStream 					</li>
<li class="list-group-item">	SequenceInputStream 					</li>
<li class="list-group-item">	BufferedOutputStream & BufferedInputStream 					</li>
<li class="list-group-item">	FileWriter & FileReader 					</li>
<li class="list-group-item">	CharArrayWriter 					</li>
<li class="list-group-item">	Input from keyboard by InputStreamReader 					</li>
<li class="list-group-item">	Input from keyboard by Console 					</li>
<li class="list-group-item">	Input from keyboard by Scanner 					</li>
<li class="list-group-item">	PrintStream class 					</li>
<li class="list-group-item">	PrintWriter class 					</li>
<li class="list-group-item">	Compressing and Uncompressing File 					</li>
<li class="list-group-item">	Reading and Writing data simultaneously 					</li>
<li class="list-group-item">	DataInputStream and DataOutputStream 					</li>
<li class="list-group-item">	StreamTokenizer class 					</li>
      </ol>
      </div>
    </div>
  </div>
 
 
 
  
</div>
</h4></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Advance JAVA
    <span style="display:inline-block;float:right;">Fee: Rs 4000/-</span></h3>
    <p><h4>
    <div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
      
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">
        <h3>Multithreading     
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	Multithreading : What and Why?					</li>
<li class="list-group-item">	Life Cycle of a Thread 					</li>
<li class="list-group-item">	Creating Thread 					</li>
<li class="list-group-item">	Thread Schedular 					</li>
<li class="list-group-item">	Sleeping a thread					</li>
<li class="list-group-item">	Joining a thread 					</li>
<li class="list-group-item">	Thread Priority 					</li>
<li class="list-group-item">	Daemon Thread 					</li>
<li class="list-group-item">	Thread Pooling 					</li>
<li class="list-group-item">	Thread Group 					</li>
<li class="list-group-item">	ShutdownHook 					</li>
<li class="list-group-item">	Performing multiple task by multiple thread 					</li>
<li class="list-group-item">	Garbage Collection 					</li>
<li class="list-group-item">	Runnable class 					</li>
      
      </ol>
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">
        <h3>Synchronization
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
      <li class="list-group-item">	Synchronization : What and Why?				</li>
<li class="list-group-item">	synchronized method 				</li>
<li class="list-group-item">	synchronized block 				</li>
<li class="list-group-item">	static synchronization 				</li>
<li class="list-group-item">	Deadlock 				</li>
<li class="list-group-item">	Inter-thread Communication				</li>
<li class="list-group-item">	Interrupting Thread 				</li>
      
      
      </ol>
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse9">
        <h3>Serialization
        
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
<li class="list-group-item">	Serialization & Deserialization					</li>
<li class="list-group-item">	Serialization with IS-A and Has-A					</li>
<li class="list-group-item">	transient keyword 					</li>
      
      
      </ol>
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse10">
        <h3>Networking
        
        
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
<li class="list-group-item">	Socket Programming 					</li>
<li class="list-group-item">	URL class 					</li>
<li class="list-group-item">	Displaying data of a web page 					</li>
<li class="list-group-item">	InetAddress class 					</li>
<li class="list-group-item">	DatagramSocket and DatagramPacket 					</li>
<li class="list-group-item">	Two way communication 					</li>
      
      
      
      </ol>
      </div>
    </div>
  </div>
  
  
      <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
        <h3>Reflection API
        
        
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
<li class="list-group-item">	Reflection API 					</li>
<li class="list-group-item">	newInstance() & Determining the class object 					</li>
<li class="list-group-item">	javap tool 					</li>
<li class="list-group-item">	creating javap tool 					</li>
<li class="list-group-item">	creating appletviewer 					</li>
<li class="list-group-item">	Accessing private method from outside the class 					</li>

      
      
      </ol>
      </div>
    </div>
  </div>
  
        <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse12">
        <h3>Collections
        
        
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
<li class="list-group-item">	Collection Framework 				</li>
<li class="list-group-item">	ArrayList class 				</li>
<li class="list-group-item">	LinkedList class 				</li>
<li class="list-group-item">	ListIterator interface 				</li>
<li class="list-group-item">	HashSet class 				</li>
<li class="list-group-item">	LinkedHashSet class 				</li>
<li class="list-group-item">	TreeSet class 				</li>
<li class="list-group-item">	PriorityQueue class 				</li>
<li class="list-group-item">	ArrayDeque class 				</li>
<li class="list-group-item">	Map interface 				</li>
<li class="list-group-item">	HashMap class				</li>
<li class="list-group-item">	LinkedHashMap class 				</li>
<li class="list-group-item">	TreeMap class 				</li>
<li class="list-group-item">	Hashtable class 				</li>
<li class="list-group-item">	Comparable and Comparator 				</li>
<li class="list-group-item">	Properties class 				</li>

      
      
      </ol>
      </div>
    </div>
  </div>
  
        <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse13">
        <h3>JDBC
        
        
             
        </h3>
        </a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse">
      <div class="panel-body">
      <ol class="list-group">  
<li class="list-group-item">	JDBC Drivers				</li>
<li class="list-group-item">	Steps to connect to the database 				</li>
<li class="list-group-item">	Connectivity with Oracle 				</li>
<li class="list-group-item">	Connectivity with MySQL 				</li>
<li class="list-group-item">	Connectivity with Access without DSN 				</li>
<li class="list-group-item">	DriverManager 				</li>
<li class="list-group-item">	Connection interface 				</li>
<li class="list-group-item">	Statement interface 				</li>
<li class="list-group-item">	ResultSet interface 				</li>
<li class="list-group-item">	PreparedStatement 				</li>
<li class="list-group-item">	ResultSetMetaData 				</li>
<li class="list-group-item">	DatabaseMetaData 				</li>
<li class="list-group-item">	Storing image 				</li>
<li class="list-group-item">	Retrieving image 				</li>
<li class="list-group-item">	Storing file 				</li>
<li class="list-group-item">	Retrieving file 				</li>
<li class="list-group-item">	Stored procedures and functions 				</li>
<li class="list-group-item">	Transaction Management 				</li>
<li class="list-group-item">	Batch Processing 				</li>
<li class="list-group-item">	JDBC New Features				</li>
<li class="list-group-item">	Mini Project 				</li>

      
      
      </ol>
      </div>
    </div>
  </div>
  
  
</h4></p>
  </div>
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

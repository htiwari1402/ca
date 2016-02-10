/*app.controller('pageController', ['$scope','$http', '$route',' $routeParams','$location','$rootScope', '$window',
                                  function($scope,$http, $route, $routeParams,$location,$rootScope,$window) 
{
       
       init($scope,$http, $route, $routeParams,$rootScope,$window);
       function init($scope,$http,$route, $routeParams,$rootScope,$window) 
       {  
       }
               
}
]);*/
app.controller('examController',['$scope', '$route', '$routeParams','$http','$location','$rootScope', 
                                 function($scope, $route, $routeParams,$http,$location,$rootScope) 
{
       
       init($scope,$http, $route, $routeParams,$rootScope);
       function init($scope,$http,$route, $routeParams,$rootScope) 
       { 
    	   $scope.success= false;
    	   $scope.exam = {
    			   name: "",
    			   subject:"",
    			   durationHrs:"",
    			   durationMin:""
    	   };
       }
       $scope.createExam = function()
       {
    	   $http.post("createExam.php",$scope.exam)
    	   .success(function(){
    		   $scope.success= true;
    		   $scope.exam = {
        			   name: "",
        			   subject:"",
        			   durationHrs:"",
        			   durationMin:""
        	   };
    	   });
    	   $location.url("selectExam");
       }           
}
]);

app.controller('selectExamController',['$scope', '$route', '$routeParams','$http','$location','$rootScope', 
                                 function($scope, $route, $routeParams,$http,$location,$rootScope) 
{
       
       init($scope,$http, $route, $routeParams,$rootScope);
       function init($scope,$http,$route, $routeParams,$rootScope) 
       {  
    	   $rootScope.selectedExam = {};
    	   $http.post('rest/fetchExams.php').
    	   success(function(data){
    		      $scope.exams = data;
    		     // console.log(JSON.stringify($scope.exams));
    	   });
       }
       $http.post('rest/fetchExams.php').
	   success(function(data){
		      $scope.exams = data;
		     // console.log(JSON.stringify($scope.exams));
	   });
       $scope.selectQuestion = function()
       {
    	   $rootScope.selectedExam = $scope.selectedExam;
    	   $location.url("addQuestion");
       }
               
}
]);

app.controller('addQuestionCtrl',['$scope', '$route', '$routeParams','$http','$location','$rootScope', 
                                       function($scope, $route, $routeParams,$http,$location,$rootScope) 
      {
             
             init($scope,$http, $route, $routeParams,$rootScope);
             function init($scope,$http,$route, $routeParams,$rootScope) 
             {  
          	    $scope.question = {
          	    	examId:0,
          	    	text:"",
          	    	difficulty:"",
          	    	noOfOption:0,
          	    	option:null,
          	    	correct:null
          	    };
             }
            $scope.generateOptions = function()
            {
            	var cnt = $scope.question.noOfOption;
            	var arr = [];
            	$scope.question.option = arr;
            	
            	for(var i=0;i<cnt;i++)
        		{
            		$scope.question.option[i]= {
            				text:"",
            				isCorrect : false
            		};
            		
        		}
            	for(var i=0;i<cnt;i++)
            		{
            		      $('#optionDiv'). append( "<div class='row'>" +
            		      		"<span class='col-sm-3'>Option "+(i+1)+"&nbsp;&nbsp;</span><textarea id='option-"+i+"-text'  class='col-sm-6'></textarea>" +
            		      		"<span class='col-sm-3'>Correct Answer&nbsp;&nbsp;<input   type='checkbox' id='option-"+i+"-isCorrect' ng-true-value='1' ng-false-value='0'></span></div>");
            		}
            }
            $scope.insertQuestion = function()
            {
            	var nos = $scope.question.noOfOption;
            	$scope.question.examId = $rootScope.selectedExam.id;
            	for(var i=0;i<nos;i++)
        		{
            		var textVal = $('#option-'+i+'-text').val();
            		var isCorrectVal = $('#option-'+i+'-isCorrect').is(":checked");
            		$scope.question.option[i]= {
            				text:textVal,
            				isCorrect : isCorrectVal
            		};
            		
        		}
            	$http.post("addQuestion.php",$scope.question).
            	success(function(data)
            			{
            		        $scope.success = true;
            		        $('#optionDiv').html(' ');
            		        $scope.question.text = "";
            		        $scope.question.difficulty = " ";
            		        $scope.question.noOfOption = 0;
            			})
            }
      }
      ]);
app.controller('takeExamCtrl',['$scope', '$route', '$routeParams','$http','$location','$rootScope', 
                                       function($scope, $route, $routeParams,$http,$location,$rootScope) 
      {
             
             init($scope,$http, $route, $routeParams,$rootScope);
             function init($scope,$http,$route, $routeParams,$rootScope) 
             {  
            	 $scope.pageID = 0;
            	 $scope.noOfQuestions = 0;
            	var answerArray = [];
            	$scope.qaMap = [];
          	    $http.get('./takeExam.php?id=1')
          	    .success(function(data)
          	    		{
          	    	        //console.log(JSON.stringify(data));
          	    	        angular.forEach(data,function(each){
          	    	        	$scope.noOfQuestions ++;
          	    	        	angular.forEach(each.option[0],function(eachOpt){
          	    	        		eachOpt.isCorrect = 0;
          	    	        	});
          	    	        });
          	    	        //console.log(JSON.stringify(data));
          	    			$scope.question = data;
          	    		});
             }
             $scope.submitExam = function()
             {
            	 $http.post('processExam.php',$scope.question)
            	 .success(function(data)
            			 {
            		             $rootScope.report = data;
            		             $location.url('report');
            			 });
             }
             /*
             $scope.catchAnswer = function(q,a)
             {
            	 var qa={
			             question:q,
			             answer:a
	                };
            	 if($('#opt'+q+'-'+a).prop("checked") == true)
            		 {
            	               $scope.qaMap.push(qa);
            		 }
             }*/
                     
      }
      ]);
app.controller('reportCtrl',['$scope', '$route', '$routeParams','$http','$location','$rootScope', 
                               function($scope, $route, $routeParams,$http,$location,$rootScope) 
{
     
     init($scope,$http, $route, $routeParams,$rootScope);
     function init($scope,$http,$route, $routeParams,$rootScope) 
     {  
    	    
     }
     var config1 = liquidFillGaugeDefaultSettings();
	    config1.circleColor = "#FF7777";
	    config1.textColor = "#FF4444";
	    config1.waveTextColor = "#FFAAAA";
	    config1.waveColor = "#FFDDDD";
	    config1.circleThickness = 0.2;
	    config1.textVertPosition = 0.2;
	    config1.waveAnimateTime = 1000;
	    var score = ( $rootScope.report.marks/$rootScope.report.mm)*100;
	    //console.log(score);
	    var gauge2= loadLiquidFillGauge("fillgauge2",score, config1);
             
}
]);

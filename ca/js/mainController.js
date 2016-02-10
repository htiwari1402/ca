app.controller('mainController', ['$scope','$http','$location','$rootScope', '$window',
                                  function($scope, $route, $routeParams,$http,$location,$rootScope,$window) 
{
       
       init($scope, $route, $routeParams,$http,$rootScope,$window);
       function init($scope, $route, $routeParams,$http,$rootScope,$window) 
       {
    	   
	   
       }
      
              
}
]);
app.controller('regController', ['$scope','$http','$location','$rootScope', '$window',
                                  function($scope,$http,$location,$rootScope,$window, $route, $routeParams) 
{
       
       init($scope,$http, $route, $routeParams,$rootScope,$window);
       function init($scope,$http, $route, $routeParams,$rootScope,$window) 
       { 
    	   $scope.success = false;
    	   $scope.submitEnable = true;
    	   $scope.fn="";
		   $scope.ln="";
		   $scope.contactNo="";
		   $scope.email="";
		   $scope.inst="";
		   $scope.sem="";
		   $scope.course="";
		   $scope.isLoading = true;
       }
       $scope.isSubmitEnable = function()
       {
    	  /* alert($scope.fn.length  +'-'+
    			   $scope.ln.length +'-'+
    			   $scope.contactNo +'-'+
    			   $scope.email.length +'-'+
    			   $scope.inst.length +'-'+
    			   $scope.sem );*/
    	   if(
    			   $scope.fn.length  > 0 &&
    			   $scope.ln.length > 0 &&
    			   $scope.contactNo > 0 &&
    			   $scope.email.length > 0 &&
    			   $scope.inst.length > 0 &&
    			   $scope.sem > 0 &&
    			   $scope.isLoading)
    		   {
    		   $scope.submitEnable = false;
    		   }
    	   else
    		   {
    		   $scope.submitEnable = true;
    		   }
    		  return    $scope.submitEnable;
       }
       $scope.submitReg = function()
       {
    	   $scope.isLoading=false;
       $scope.file = document.getElementById("upl").value;
       $scope.data = {
    		   fname:$scope.fn,
    		   name: $scope.ln,
    		   contactNo:$scope.contactNo,
    		   email:$scope.email,
    		   inst:$scope.inst,
    		   sem:$scope.sem,
    		   course:$scope.course,
    		   resume: $scope.file
       };
       $http.post(
    		    "control/control.php",$scope.data
    		   ).
    		   success(function(data)
    				   {
    			            $scope.success = true;
    			            $scope.isLoading=true;
    			            $scope.fn="";
    			 		   $scope.ln="";
    			 		   $scope.contactNo="";
    			 		   $scope.email="";
    			 		   $scope.inst="";
    			 		   $scope.sem="";
    				   });
       }
              
}
]);
app.controller('enquiryCtrl', ['$scope','$http','$location','$rootScope', '$window',
                                 function($scope,$http,$location,$rootScope,$window, $route, $routeParams) 
{
      
      init($scope,$http, $route, $routeParams,$rootScope,$window);
      function init($scope,$http, $route, $routeParams,$rootScope,$window) 
      { 
   	   //$scope.success = false;
   	   $scope.name="";
   	   $scope.email = "";
   	   $scope.msg = "";
      }
      $scope.isSubmitEnable = function()
      {
   	  /* alert($scope.fn.length  +'-'+
   			   $scope.ln.length +'-'+
   			   $scope.contactNo +'-'+
   			   $scope.email.length +'-'+
   			   $scope.inst.length +'-'+
   			   $scope.sem );*/
   	   if(
   			   $scope.name.length  > 0 &&
   			   $scope.email.length > 0 &&
   			   $scope.msg.length > 0 )
   		   {
   		   $scope.submitEnable = false;
   		   }
   	   else
   		   {
   		   $scope.submitEnable = true;
   		   }
   		  return    $scope.submitEnable;
      }
      $scope.submitReg = function()
      {
      $scope.data = {
   		   name:$scope.name,
   		   email:$scope.email,
   		   msg:$scope.msg
      };
      $http.post(
   		    "control/enquiry.php",$scope.data
   		   ).
   		   success(function(data)
   				   {
   			   				$scope.name="";
   			   				$scope.email = "";
   			   				$scope.msg = "";
   				   });
      }
             
}
]);
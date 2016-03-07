app.controller('headController', ['$scope','$http','$location','$rootScope', '$window',
                                  function($scope,$http,$location,$rootScope,$window) 
{
       
       init($scope,$http, $rootScope,$window);
       function init($scope,$http, $rootScope,$window) 
       {
    	   
	   
       }
      $scope.logout = function()
      {
    	/*  $http.post('logout.php',null).
    	  success(function(){*/
    		  window.location="logout.php";
    	 // });
      }
              
}
]);
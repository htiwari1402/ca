var app = angular.module('edusar', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
	  $routeProvider
	  .when('/', {
	    controller : 'examController',
	    templateUrl : './partials/createExam.html'
	  })
	  .when('/selectExam', {
	    controller : 'selectExamController',
	    templateUrl : './partials/selectExam.html'
	  })
	  .when('/addQuestion', {
	    controller : 'addQuestionCtrl',
	    templateUrl : './partials/addQuestion.html'
	  })
	   .when('/takeExam', {
	    controller : 'takeExamCtrl',
	    templateUrl : './partials/takeExam.html'
	  })
	  .when('/report', {
	    controller : 'reportCtrl',
	    templateUrl : './partials/report.html'
	  })
	  .otherwise({
	        redirectTo: '/'
	      });
}]);

$(function(){

	$("#drop-box").click(function(){
		$("#upl").click();
	});

	// To prevent Browsers from opening the file when its dragged and dropped on to the page
	$(document).on('drop dragover', function (e) {
        e.preventDefault();
    }); 

	// Add events
	$('input[type=file]').on('change', fileUpload);

	// File uploader function

	function fileUpload(event){  
		$("#drop-box").html("<p>"+event.target.value+" uploading...</p>");
		files = event.target.files;
		var data = new FormData();
		var error = 0;
		for (var i = 0; i < files.length; i++) {
  			var file = files[i];
  			console.log(file.size);
			 if(file.size > 1048576){
		  		$("#drop-box").html("<p> Too large Payload. Select another file</p>");
		   		error = 1;
		  	}else{
		  		data.append('doc', file, file.name);
		  	}
	 	}
	 	if(!error){
		 	var xhr = new XMLHttpRequest();
		 	xhr.open('POST', 'upload.php', true);
		 	xhr.send(data);
		 	xhr.onload = function () {
				if (xhr.status === 200) {
					$("#drop-box").html("<p> File Uploaded. Select more files</p>");
				} else {
					$("#drop-box").html("<p> Error in upload, try again.</p>");
				}
			};
		}
	}

});
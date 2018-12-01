/************************************************/
/*Angular Code Starts Here*/
/************************************************/

/************************************************/
/**Validation Tour Create Form**/ 
/************************************************/	   
angular
     .module('tours',[])
     .controller('createTourContoller',function($scope,$http){						
	/************************************************/
	/************************************************/
	  /**Create New Tour Code**/ 
	   var fd = new FormData();
	   $scope.createTour=function(){
			var tourArr={	
			'tour_title': $scope.tour_title,
			'description': $scope.description,
			'operator': $scope.operator,
			'tour_type': $scope.tour_type,
			'start_location': $scope.start_location,
			'end_location': $scope.end_location,
			'start_date': $scope.start_date,
			'tour_duration': $scope.tour_duration
		    };
		    $http({
            method: 'POST',
            url:'http://localhost/easytrip/admin/tours/createTour',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data:tourArr,
            }).success(function (response) {
				console.log(response);
			});
	  }
	   /**Fetching Tour Data And Append On Textbox & Input Fields Code**/ 
	   $scope.fetchData=function(tourId){
		   var tourArr={'tourId':tourId};
		   $http({
            method: 'POST',
            url:'http://localhost/easytrip/admin/tours/getTourJsonDataByTourId',            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data:tourArr,
            }).success(function (response) {
				var jsonStrTour=JSON.stringify(response);
				document.getElementById("tour_title").value=response[0].tour_title;
				document.getElementById("description").value=response[0].description;
				document.getElementById("operator").value=response[0].operator;
				document.getElementById("tour_type").value=response[0].tour_type;
				document.getElementById("start_location").value=response[0].start_location;
				document.getElementById("end_location").value=response[0].end_location;
				document.getElementById("start_date").value=response[0].start_date;
				document.getElementById("tour_duration").value=response[0].tour_duration;
				document.getElementById("tour_id").value=response[0].id;
			});
	   }
	   /**Edit Tour Code**/ 
	   $scope.editTour=function(){
			var tourArr={
			'tour_title': document.getElementById("tour_title").value,
			'description': document.getElementById("description").value,
			'operator': document.getElementById("operator").value,
			'tour_type': document.getElementById("tour_type").value,
			'start_location': document.getElementById("start_location").value,
			'end_location': document.getElementById("end_location").value,
			'start_date': document.getElementById("start_date").value,
			'tour_duration': document.getElementById("tour_duration").value,
			'tour_id': document.getElementById("tour_id").value,
		    };
		    $http({
            method: 'POST',
            url:'http://localhost/easytrip/admin/tours/updateTour',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data:tourArr,
            }).success(function (response) {
				console.log(response);
			});
	  }
});		


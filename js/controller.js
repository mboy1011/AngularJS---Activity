var app = angular.module('app',[]);
app.controller('ctrl', function($scope,$http) {



		$scope.login = function(){
			 let url = "http://127.0.0.1/activity1/php/data2.php";
      		 let data = $.param({
      		 	Username : $scope.u,
      		 	Password : $scope.p
      		}); 	

		      let config = {
		        headers : {
		                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
		                  }
		      }
		     		$http.post(url, data, config)
		           .then(
		               function(response){
		                 console.log(response);
		                 if(response.data == '1'){
		                 	if (response.status == 200) {
		                 		alert("Success. with Connection");
		                 	} else {
		                 		alert("Success. without conneciton");
		                 	}

		                 }else{
		                 	alert("Failed.")
		                 }
		               }, 
		               function(response){
		                 console.log(response);
		               }
		            );
				}


			 $scope.callData = function(){
		      $http.get("http://127.0.0.1/activity1/php/data.php")
		        .then(
		          function (success){
		            $scope.users = success.data;
		          },
		          function (error){
		            console.log("Failed!.");
		          }
		        ); 
		 	  }

			  $scope.pushData = function(){
		      let url = "http://127.0.0.1/activity1/php/insert.php";
		      let data = $.param({
		          fname : $scope.fname,
		          lname : $scope.lname,
		          mname : $scope.mname,
		          gender : $scope.gender,
		          dob	: $scope.dob
		      }); 

		      let config = {
		        headers : {
		                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
		                  }
		      }
		     		$http.post(url, data, config)
		           .then(
		               function(response){
		                 console.log(response);
		                 $scope.callData();
		               }, 
		               function(response){
		                 console.log(response);
		               }
		            );
		      }


		      $scope.callUser = function() {
				      $http.get("http://127.0.0.1/activity1/php/data1.php")
				        .then(
				          function (success){
				            $scope.persons = success.data;
				          },
				          function (error){
				            console.log("Failed!.");
				          }
				        ); 
		      }
});


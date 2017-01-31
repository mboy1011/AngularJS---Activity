<!DOCTYPE html>
<html ng-app="app">
<head>
	<title>AngularJS - Activity</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div ng-controller="ctrl">
<form>
	<h1>Login</h1>
	<input type="username" ng-model="u" placeholder="username"><br>
	<input type="password" ng-model="p" placeholder="password"><br>
	<button ng-click="login()">Login</button>
</form>
	<h2>UserAccounts</h2>
<li ng-init="callData()">
	<ul ng-repeat = "user in users">
		{{ user.id }}
		{{ user.username }}
		{{ user.password }}
	</ul>
</li>
	<h3>Register:</h3>
<form>
	<input type="text" ng-model="fname" placeholder="First Name"><br>
	<input type="text" ng-model="lname" placeholder="Last Name"><br>
	<input type="text" ng-model="mname" placeholder="Middle Name"><br>
	<input type="text" ng-model="gender" placeholder="Gender"><br>
	<input type="text" ng-model="dob" placeholder="DOB"><br>
	<button ng-click="pushData()">Register</button>
</form>
	<h4>Persons</h4>
	<li ng-init="callUser()">
		<ul ng-repeat = "person in persons">
			{{ person.id  }}
			{{ person.fname }}
			{{ person.lname }}
			{{ person.mname }}
			{{ person.dob }}
			{{ person.gender }}
		</ul>
	</li>
</div>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/controller.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en" ng-app>
<head>
	<title>Profile List System with Angular and Laravel</title>
	<style type="text/css">
		input,textarea {
			border-radius: 5px;
			width: 20%;
		}
	</style>
</head>
<body ng-controller="ProfileController"> 

	<h1>Profile List System with Angular and Laravel</h1>

	<!-- For Search -->
	<h3>Search Your Profile</h3>
	<input type="text" placeholder="Search Profiles" ng-model="search">

	<br><br>

	<h3>Profile Lists<small ng-if="profilelist()"> | Number of Profiles ({{ profilelist() }}) </small></h3>
	<ul>
		<li ng-repeat="profile in profiles | filter:search">
			{{ profile.name }}<br>
			{{ profile.bio }}
		</li>
	</ul>
	<!--For Profile Add -->
	<h3>Add Profiles</h3>

	<form ng-submit="addProfile()">
		<input type="text" placeholder="Profile Name" ng-model="name">
		<br><br>
		<textarea ng-model="body" placeholder="Profile Bio"></textarea>
		<br><br>
		<button type="submit">Save Profile</button>
	</form>

	<script src="/js/angular.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>
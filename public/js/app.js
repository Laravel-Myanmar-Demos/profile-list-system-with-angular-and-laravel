function ProfileController($scope, $http) {

	$http.get('/profiles').success(function(profiles){
		$scope.profiles = profiles;
	});

	$scope.profilelist = function() {
		var count = 0;

		angular.forEach($scope.profiles, function() {
			count += 1;
		});

		return count;
	}

	$scope.addProfile = function() {
		var profile = {
			name: $scope.name,
			bio: $scope.body
		};

		$scope.profiles.push(profile);

		$http.post('profiles', profile);
	};
}
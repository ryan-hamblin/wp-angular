var app = angular.module('wp-app');

app.controller('contentCtrl', function($scope, $http, $routeParams){
	$http.get('wp-json/posts/' + $routeParams.ID).success(function(res){
		$scope.post = res;
	});
});
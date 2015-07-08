var app = angular.module('wp-app');

app.controller('Main', function($scope, $http, $routeParams){
	$http.get('wp-json/posts/').success(function(res){
		$scope.posts = res;
	});
	$scope.name = "Hello World";


});
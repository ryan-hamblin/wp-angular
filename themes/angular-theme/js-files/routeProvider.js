var app = angular.module('wp-app');

app.config(function($routeProvider, $locationProvider){
	$locationProvider.html5Mode(true)
	$routeProvider
	.when('/', {
		templateUrl: "main.html",
		controller: 'Main'
	})
	.when('/demo', {
		templateUrl: 'demo.html',
		controller: 'Main'
	})
	.when('/:ID', {
		templateUrl: 'content.html',
		controller: 'contentCtrl'
	})
});
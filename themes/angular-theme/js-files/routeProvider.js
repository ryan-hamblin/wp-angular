var app = angular.module('wp-app');

app.config(function($routeProvider, $locationProvider){
	$locationProvider.html5Mode({
		enabled: true,
		requireBase: false
	});

	$routeProvider
	.when('/', {
		templateUrl: "/partials/main.html",
		controller: 'Main'
	})
	.when('/blog', {
		templateUrl: '/partials/blog.html',
		controller: 'Main'
	})
	.when('/:ID', {
		templateUrl: '/partials/content.html',
		controller: 'Content'
	})
});
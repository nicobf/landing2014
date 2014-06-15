var tm = function($){
	var app = {

		handleScrollTo : function(){
		},

		initialize : function(){
			app.handleScrollTo();
		}
	};

	return {
		init : function(){ app.initialize(); }
	}
}(jQuery);

$(document).ready(function() {
	tm.init();
});

/**
* techmeetup Module
*
* Description
*/
var techmeetup = angular.module('techmeetup', ['ngRoute', 'ngScrollTo'])
	.config(function($routeProvider){
		$routeProvider.
			when('/', 		{templateUrl : 'templates/2014.html'}).
			when('/2013', 	{templateUrl : 'templates/2013.html'}).
			when('/2012', 	{templateUrl : 'templates/2012.html'}).
			otherwise(      {redirectTo  :'/'} );
	});

techmeetup.run(function($rootScope, $templateCache) {
    $rootScope.$on('$routeChangeStart', function(event, next, current) {
        if (typeof(current) !== 'undefined'){
            $templateCache.remove(current.templateUrl);
        }
    });
});

techmeetup.controller('main', function($scope, $route, $routeParams, $location, $anchorScroll){

	$scope.$on('$viewContentLoaded', function() {

		//return;

		try{
			HeaderVideo.init({
		        container     : $('.header-video-2013'),
		        header        : $('.header-video--media-2013'),
		        videoTrigger  : $(".video-trigger"),
		        autoPlayVideo : false
		    });
		}catch(e){}
		
	});

});

techmeetup.controller('organizers', function ($scope) {

	$scope.organizers = [
		{
			'name'  	: 'Nicolás Bianchi',
    		'image' 	: 'nicolasb.jpg',
    		'twitter' 	: 'nicobf'
		},
		{
    		'name'  	: 'Martín Cabrera',
    		'image' 	: 'martinc.jpg',
    		'twitter' 	: 'murtun'
		},
		{
			'name'  	: 'Martín Loy',
    		'image' 	: 'martin_loy.jpg',
    		'twitter' 	: 'martinloy'
		},
		{
			'name'  	: 'Ignacio Nin',
    		'image' 	: 'nacho_nin.jpg',
    		'twitter' 	: 'nachexnachex'
		},
		{
			'name'  	: 'Diego Sapriza',
    		'image' 	: 'diego_sapriza.jpg',
    		'twitter' 	: 'AV4TAr'
		}
	];
});

techmeetup.controller('sponsors', function ($scope) {

	$scope.sponsors = [
		{
			'name'  	: 'CASE',
    		'image' 	: 'case.png',
    		'url' 		: 'http://www.case-inc.com/?ref=tech.meetup.uy'
		},
		{
			'name'  	: 'guruhub',
    		'image' 	: 'guruhub.png',
    		'url' 		: 'http://guruhub.com.uy/?ref=tech.meetup.uy'
		},
		{
			'name'  	: 'moove-it',
    		'image' 	: 'moove-it.png',
    		'url' 		: 'http://moove-it.com/?ref=tech.meetup.uy'
		},
		{
			'name'  	: 'default',
    		'image' 	: 'default.png',
    		'url' 		: 'http://default.com'
		}
	];
});

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
var techmeetup = angular.module('techmeetup', ['ngRoute'])
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

techmeetup.controller('main', function($scope, $route, $routeParams, $location){	

	$scope.$on('$viewContentLoaded', function() {

		return;

		try{
			HeaderVideo.init({
		        container     : $('.header-video'),
		        header        : $('.header-video--media'),
		        videoTrigger  : $("#video-trigger"),
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

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
var techmeetup = angular.module('techmeetup', []);

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

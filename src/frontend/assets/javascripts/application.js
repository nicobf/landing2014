var tm = function($){
	var app = {

		prepareVideo : function(){
			HeaderVideo.init({
		        container     : $('.header-video-2013'),
		        header        : $('.header-video--media-2013'),
		        videoTrigger  : $(".video-trigger"),
		        autoPlayVideo : false
		    });
		},

		initialize : function(){
			app.prepareVideo();
		}
	};

	return {
		init : function(){ app.initialize(); }
	}
}(jQuery);

$(document).ready(function() {
	tm.init();
});
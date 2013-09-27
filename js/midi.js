$(document).ready(function(){
	$.localScroll({
		queue:true,
		duration:1000,
		hash:true
	});
	
	var waitForFinalEvent = (function () {
	  var timers = {};
	  return function (callback, ms, uniqueId) {
	    if (!uniqueId) {
	      uniqueId = "Don't call this twice without a uniqueId";
	    }
	    if (timers[uniqueId]) {
	      clearTimeout (timers[uniqueId]);
	    }
	    timers[uniqueId] = setTimeout(callback, ms);
	  };
	})();
	
	
	// Initiale Naviklassen vergeben	
	$('header:first').addClass($('header nav li:first-child a').attr('class'));
	$('header nav li:first-child a').addClass('active');

	$(window).scroll(function () {
			var inviewid = $("section:in-viewport:first").attr('id');
			
			// Beim scrollen die sichtbare Klasse der Navigation geben
		    waitForFinalEvent(function(){
				$('header:first').removeClass().addClass(inviewid);
				$('header nav a').removeClass('active');
				$('header nav a.'+ inviewid).addClass('active');
				
		    }, 50, "asideWidth");
	});	
	
	
});

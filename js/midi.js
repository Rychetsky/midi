$(document).ready(function(){
	$.localScroll({
		queue:true,
		duration:1000,
		hash:true
	});
		
	$('header:first').addClass($('header nav li:nth-child(2) a').attr('class'));

	$('header nav li:nth-child(2) a').addClass('active');
	
	
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
	
	
	$(window).scroll(function () {
			var inviewid = $("section:in-viewport:first").attr('id');
		   
		    waitForFinalEvent(function(){
				$('header:first').removeClass().addClass(inviewid);
				$('header nav a').removeClass('active');
				$('header nav a.'+ inviewid).addClass('active');
				
		    }, 50, "asideWidth");



/*
	  var inview = '#' + $('.sectionSelector:in-viewport:first').parent().attr('id'),
	      $link = $('.mainNav li a').filter('[hash=' + inview + ']');
	  if ($link.length && !$link.is('.active')) {
	    $('.mainNav li a').removeClass('active');
	    $link.addClass('active');    
	  }
*/
	});	
	
	
});

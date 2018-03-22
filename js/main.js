/* preloader por ihatetomatoes */
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		new WOW().init();
	}, 900);
	
});
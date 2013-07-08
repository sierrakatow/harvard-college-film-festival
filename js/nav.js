$(document).ready(function(){

	$(window).scroll(function(){
 		var scrollPos = $(window).scrollTop();

 		if ( scrollPos > $('#header').height() ) {
 			$(".navbar").addClass("navbar-fixed-top");
 		} else {
			$(".navbar").removeClass("navbar-fixed-top");
		}
	});
});

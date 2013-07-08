$(document).ready(function(){

	$(window).scroll(function(){
 		var scrollPos = $(window).scrollTop();

 		if ( scrollPos > $('#header').height() ) {
 			$(".navbar").addClass("navbar-fixed-top");
 		} else {
			$(".navbar").removeClass("navbar-fixed-top");
		}

		if ( scrollPos > ( $('#header').height() + $('#clock').height() + $('#about').height() + $('#schedule').height() + $('#board').height() )) {
			$(".active").removeClass("active");
			$(".submissions").addClass("active");
			$(".navbar").addClass("navbar-inverse");
			$(".icon").addClass("icon-white");
		} else if ( scrollPos > ( $('#header').height() + $('#clock').height() + $('#about').height() + $('#schedule').height() )) {
			$(".active").removeClass("active");
			$(".board").addClass("active");
			$(".navbar").addClass("navbar-inverse");
			$(".icon").addClass("icon-white");
		} else if ( scrollPos > ( $('#header').height() + $('#clock').height() + $('#about').height() + 40 )) {
			$(".active").removeClass("active");
			$(".schedule").addClass("active");
			$(".navbar").removeClass("navbar-inverse");
			$(".icon").removeClass("icon-white");
		} else if ( scrollPos > ( $('#header').height() + $('#clock').height() )) {
			$(".active").removeClass("active");
			$(".about").addClass("active");
			$(".navbar").addClass("navbar-inverse");
			$(".icon").addClass("icon-white");
		} else if ( scrollPos > ( $('#header').height() )){
			$(".active").removeClass("active");
			$(".top").css("visibility", "visible");
			$(".navbar").addClass("navbar-inverse");
			$(".icon").addClass("icon-white");
		} else {
			$(".top").css("visibility", "hidden");
			$(".navbar").addClass("navbar-inverse");
			$(".icon").addClass("icon-white");
		}
	});
});

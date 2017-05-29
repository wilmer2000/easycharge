$(document).ready(function(){
	var shrinkHeader = 350; 
	$(window).scroll(function () {
	    var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            $('header').addClass('stick');
        }
        else {
            $('header').removeClass('stick');
        }
	});
	function getCurrentScroll() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}
});


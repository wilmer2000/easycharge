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
	};
	$('#contacto form').submit(function(event) {
		event.preventDefault();
		if (grecaptcha.getResponse() != "") {
	 		var data = {
			    'name': $("#contacto #name").val(),
			    'phone': $("#contacto #phone").val(),
			    'mail': $("#contacto #mail").val(),
			    'comment': $("#contacto #comment").val()
			};
			$.ajax({
			    type: "POST",
			    url: "mail.php",
			    data: data,
			    success: function(){
			        console.log('enviado')
			    }
			});
		}
	});

});
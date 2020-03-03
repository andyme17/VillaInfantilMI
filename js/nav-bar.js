/**
 * Navbar script
 */
$(document).ready(function(){	
	var header = document.getElementById('header');
    var headroom = new Headroom(header);

    headroom.init(); //puglin is initialized for navbar

	//script for hamburger menu functionality
	$("#btn-menu").click(function(){
		if ( $ (".btn-menu i").attr("class") == "fas fa-bars") {
			$ (".btn-menu i").removeClass("fas fa-bars").addClass("fas fa-times");
			$ (".menu-link").css({"left": "0"});
		} else {
			$ (".btn-menu i").removeClass("fas fa-times").addClass("fas fa-bars");
			$ (".menu-link").css({"left": "-100%"});			
		}
	})		
});



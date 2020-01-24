$(document).ready(function(){
	var header = document.getElementById('header');
    var headroom = new Headroom(header);

    headroom.init();

	$("#btn-menu").click(function(){
		if ( $ (".btn-menu i").attr("class") == "fas fa-bars") {
			$ (".btn-menu i").removeClass("fas fa-bars").addClass("fas fa-times");
			$ (".menu-link").css({"left": "0"});
		} else {
			$ (".btn-menu i").removeClass("fas fa-times").addClass("fas fa-bars");
			$ (".menu-link").css({"left": "-100%"});			
		}
	})	

	$('.sec-form-opinion').hide();

	$("#showFormOpinion").click(function(){
		$('.sec-form-opinion').toggle("linear");

		$(this).text(function(i, text){
			return text === "Dejar comentario o sugerencia >" ? "Ocultar sección para comentario" : "Dejar comentario o sugerencia >";
		})
	});

	//Slide gallery

	var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow();
	
	pgwSlideshow.reload({
		autoSlide: true,		
		maxHeight: 560
	});
})


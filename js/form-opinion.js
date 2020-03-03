/**
 * Script for opinion form 
*/
$(document).ready(function(){
    $('.sec-form-opinion').hide();

	$("#showFormOpinion").click(function(){
		$('.sec-form-opinion').toggle("linear");

		$(this).text(function(i, text){
			return text === "Dejar comentario o sugerencia >" ? "< Ocultar sección para comentario" : "Dejar comentario o sugerencia >";
		})
    }); 
});     

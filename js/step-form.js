$(document).ready(function(){
		
	function bar_progress(progress_line_object, direction) {
		var number_of_steps = progress_line_object.data('number-of-steps');
		var now_value = progress_line_object.data('now-value');
		var new_value = 0;
		if(direction == 'right') {
			new_value = now_value + ( 100 / number_of_steps );
		}
		else if(direction == 'left') {
			new_value = now_value - ( 100 / number_of_steps );
		}
		progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
	}
	
	$('.f1 fieldset:first').fadeIn('slow');


	
	//$('.f1 .btn-next').attr('disabled','disabled');

	function alerta(idInput,textAlert){
        $('#' + idInput).next().after('<div id="error">'+ textAlert +'</div>');
	}
	
	function colorSpan(idInput){
		$('#' + idInput).next().removeClass('barra').addClass('barra-error');	
	}

	function colorSpanRemove(idInput){
		$('#' + idInput).next().removeClass('barra-error').addClass('barra');
	}
	
	$('input').focus(function(){

		$('#error').remove();
		$(this).next().removeClass('barra-error').addClass('barra');
		
	});

    // next step
    $('.f1 .btn-next').on('click', function() {
		var parent_fieldset = $(this).parents('fieldset');
		var next_step = true;
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
		var progress_line = $(this).parents('.f1').find('.f1-progress-line');
	
		// fields validation
		parent_fieldset.find('input[type="text"]').each(function() {	
			if($(this).attr("name") == "ap-pat-alu" || $(this).attr("name") == "ap-mat-alu"){
				if( $(this).val() == "" || !$(this).val().match(namePattern)  ) {
					colorSpan($(this));
					alerta($(this),"Por favor, ingresa un apellido");		
					next_step = false;
				}else {
					colorSpanRemove($(this));
				}	
			}else if($(this).attr("name") == "nombre-alu"){
				if( $(this).val() == "" || !$(this).val().match(namePattern)  ) {
					colorSpan($(this));
					alerta($(this),"Por favor, ingresa el nombre del alumno");		
					next_step = false;
				}else {
					colorSpanRemove($(this));
				}
			}
		});	
	

		// fields validation
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    	});
    	}    	
    });
    
    // previous step
    $('.f1 .btn-previous').on('click', function() {
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    	});
	});  
	
	/*  // submit
	 $('.f1').on('submit', function(e) {
    	
    	// fields validation
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	// fields validation  	
    });   */
});

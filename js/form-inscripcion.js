$(document).ready(function (){
 
  function alertaRadio(idInput, textAlert) {
    $('#' + idInput).append('<div class="error">' + textAlert + '</div>');
  }

  function alertaText(idInput, textAlert) {
    $('#' + idInput).after('<div class="error">' + textAlert + '</div>');
  }

  $('input,select').on('click', function () {
    $('.error').remove();
  });

  $('input[type="text"]').on('focus', function () {
    $('.error').remove();
  });

  $('#esc-procedencia').attr('disabled', 'disabled');

  $('input[name="esc-proc"]').on('click', function () {
    if ($(this).val() == 'si') {
      $('#esc-procedencia').removeAttr('disabled');
      $('#esc-procedencia').focus();
    } else {
      $('#esc-procedencia').attr('disabled', 'disabled');
    }
  })

  //enviamos el formulario
  $('#btnForm').on('click', function (e) {

    e.preventDefault();
    const regText = /^[A-Z][A-Z]*/;
    const regNum = /^([0-9])*$/;
    const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    $('.error').remove();
    var ap_pat_alu = $('#ap-pat-alu').val().trim().toUpperCase(),
      ap_mat_alu = $('#ap-mat-alu').val().trim().toUpperCase(),
      nombre_alu = $('#nombre-alu').val().trim().toUpperCase(),
      curp_alu = $('#curp').val().trim().toUpperCase(),
      edad_alu = $('#edad-alu').val().trim(),
      lugar_nac = $('#lugar-nac').val().trim().toUpperCase(),
      religion = $('#religion').val().trim().toUpperCase(),
      tipo_sangre = $('#tipo-sangre').val().trim().toUpperCase(),
      calle_alu = $('#calle-alu').val().trim().toUpperCase(),
      num_int_alu = $('#num-int-alu').val().trim().toUpperCase(),
      num_ext_alu = $('#num-ext-alu').val().trim().toUpperCase(),
      colonia_alu = $('#colonia-alu').val().trim().toUpperCase(),
      alcaldia_alu = $('#alcaldia-alu').val().trim().toUpperCase(),
      entidad_alu = $('#entidad-alu').val().trim().toUpperCase(),
      cp_alu = $('#cp-alu').val().trim(),
      ap_pat_tutor = $('#ap-pat-tutor').val().trim().toUpperCase(),
      ap_mat_tutor = $('#ap-mat-tutor').val().trim().toUpperCase(),
      nombre_tutor = $('#nombre-tutor').val().trim().toUpperCase(),
      edad_tutor = $('#edad-tutor').val().trim(),
      grado_estudio = $('#grado-estudio').val().trim().toUpperCase(),
      ocupacion = $('#ocupacion').val().trim().toUpperCase(),
      calle_tutor = $('#calle-tutor').val().trim().toUpperCase(),
      num_int_tutor = $('#num-int-tutor').val().trim().toUpperCase(),
      num_ext_tutor = $('#num-ext-tutor').val().trim().toUpperCase(),
      colonia_tutor = $('#colonia-tutor').val().trim().toUpperCase(),
      alcaldia_tutor = $('#alcaldia-tutor').val().trim().toUpperCase(),
      entidad_tutor = $('#entidad-tutor').val().trim().toUpperCase(),
      cp_tutor = $('#cp-tutor').val().trim(),
      tel_fijo = $('#tel-fijo').val().trim(),
      tel_cel = $('#tel-cel').val().trim(),
      tel_ofi = $('#tel-ofi').val().trim(),
      email_tutor = $('#email-tutor').val().trim().toLowerCase(),
      esc_procedencia = $('#esc-procedencia').val().trim().toUpperCase();    
        
      if(!$('input[name="grado"]').is(':checked')) {
        alertaRadio('campo-radio','Por favor, selecciona una opción');            
      }else if(ap_pat_alu =="" || !regText.test(ap_pat_alu)){
        alertaText('text-label','Por favor, ingresa un apellido');            
      }else if(ap_mat_alu =="" || !regText.test(ap_mat_alu)){
        alertaText('text-label-2','Por favor, ingresa un apellido');            
      }else if(nombre_alu =="" || !regText.test(nombre_alu)){
        alertaText('text-label-3','Por favor, ingresa un nombre');            
      }else if(edad_alu =="" || !regNum.test(edad_alu) || edad_alu.length > 2){
        alertaText('text-label-4','Por favor, ingresa una edad');            
      }else if(curp_alu == ""){
        alertaText('text-label-5','Por favor, ingresa el CURP');            
      }else if(curp_alu.length > 18){
        alertaText('text-label-5','El CURP debe tener 18 caracteres');            
      }else if(!$('input[name="genero"]').is(':checked')){
        alertaRadio('campo-radio-1','Por favor, selecciona una opción');            
      }else if(lugar_nac == ""){
        alertaText('lugar-nac','Por favor, selecciona una opción');            
      }else if(religion == "" || !regText.test(religion)){
        alertaText('text-label-6','Ingresa una religión o bien ingresa ninguna');       
      }else if(tipo_sangre == ""){
        alertaText('text-label-7','Por favor, ingresa el tipo de sangre');       
      }else if(calle_alu == ""){
        alertaText('text-label-8','Por favor, ingresa el nombre de la calle');       
      }else if(num_int_alu == ""){
        alertaText('text-label-9','Ingresa un dato o bien S/N');      
      }else if(num_ext_alu == ""){
        alertaText('text-label-10','Ingresa un dato');      
      }else if(colonia_alu == ""){
        alertaText('text-label-11','Ingresa el nombre de la colonia');      
      }else if(alcaldia_alu == "" || !regText.test(alcaldia_alu) ){
        alertaText('text-label-12','Ingresa la alcaldía o municipio');        
      }else if(entidad_alu == "" || !regText.test(entidad_alu)){
        alertaText('text-label-13','Ingresa la entidad federativa');         
      }else if(cp_alu == "" || !regNum.test(cp_alu)){
        alertaText('text-label-14','Ingresa un código postal');        
      }else if(!regNum.test(cp_tutor) && cp_alu.length > 5){
        alertaText('text-label-14','Ingresa un código postal válido');      
      } else if(!$('input[name="esc-proc"]').is(':checked')){
        alertaRadio('campo-radio-2','Por favor, selecciona una opción');      
      }else if(ap_pat_tutor =="" || !regText.test(ap_pat_tutor)){
        alertaText('text-label-16','Por favor, ingresa un apellido');            
      }else if(ap_mat_tutor =="" || !regText.test(ap_mat_tutor)){
        alertaText('text-label-17','Por favor, ingresa un apellido');            
      }else if(nombre_tutor =="" || !regText.test(nombre_tutor)){
        alertaText('text-label-18','Por favor, ingresa un nombre');            
      }else if(edad_tutor =="" || !regNum.test(edad_tutor) || edad_tutor.length > 2){
        alertaText('text-label-19','Por favor, ingresa una edad');            
      }else if(grado_estudio == ""){
        alertaText('grado-estudio','Por favor, selecciona una opción');            
      }else if (ocupacion == "" || !regText.test(ocupacion)) {
        alertaText('text-label-20', 'Por favor, ingresa una ocupacion');      
      }else if(calle_tutor == ""){
        alertaText('text-label-21','Por favor, ingresa el nombre de la calle');       
      }else if(num_int_tutor == ""){
        alertaText('text-label-22','Ingresa un dato o bien S/N');      
      }else if(num_ext_tutor == ""){
        alertaText('text-label-23','Ingresa un dato');      
      }else if(colonia_tutor == ""){
        alertaText('text-label-24','Ingresa el nombre de la colonia');      
      }else if(alcaldia_tutor == "" || !regText.test(alcaldia_tutor) ){
        alertaText('text-label-25','Ingresa la alcaldía o municipio');        
      }else if(entidad_tutor == "" || !regText.test(entidad_tutor)){
        alertaText('text-label-26','Ingresa la entidad federativa');         
      }else if(cp_tutor == "" || !regNum.test(cp_tutor)){
        alertaText('text-label-27','Ingresa un código postal');        
      }else if(!regNum.test(cp_tutor) && cp_tutor.length > 5){
        alertaText('text-label-27','Ingresa un código postal válido');      
      }else if(tel_fijo == "" || !regNum.test(tel_fijo)){
        alertaText('text-label-28','Ingresa un número telefónico');      
      }else if(tel_cel == "" || !regNum.test(tel_cel)){
        alertaText('text-label-29','Ingresa un número telefónico');      
      }else if(tel_ofi == "" || !regNum.test(tel_ofi)){
        alertaText('text-label-30','Ingresa un número telefónico');      
      }else if(email_tutor == ""){
        alertaText('text-label-31','Por favor, ingresa un correo electrónico');      
      }else if(!regEmail.test(email_tutor)){
        alertaText('text-label-31','Por favor, ingresa un correo electrónico válido');      
      } else if(!$('input[name="esc-proc"]').is(':checked')){
        alertaRadio('campo-radio-2','Por favor, selecciona una opción');
      }else if (($('input[name="esc-proc"]:checked').val() == 'si') && esc_procedencia == "") {
        alertaText('text-label-15','Ingresa una escuela o bien selecciona no en la pregunta anterior');      
      }else{
        var v_grado = $('input[name=grado]:checked').val();
        var v_genero = $('input[name=genero]:checked').val();

        if(esc_procedencia == ''){
          esc_procedencia = 'NO APLICA';
        }
      
      const datos= new FormData();
        datos.append('grado',v_grado);
        datos.append('ap_pat_alu',ap_pat_alu);
        datos.append('ap_mat_alu',ap_mat_alu);
        datos.append('nombre_alu',nombre_alu);
        datos.append('edad_alu',nombre_alu);
        datos.append('curp',curp_alu);
        datos.append('genero',v_genero);
        datos.append('lugar_nac',lugar_nac);
        datos.append('religion',religion);
        datos.append('tipo_sangre',tipo_sangre);
        datos.append('calle_alu',calle_alu);
        datos.append('num_int_alu',num_int_alu);
        datos.append('num_ext_alu',num_ext_alu);
        datos.append('colonia_alu',colonia_alu);
        datos.append('alcaldia_alu',alcaldia_alu);
        datos.append('entidad_alu',entidad_alu);
        datos.append('cp_alu',cp_alu);
        datos.append('esc_procedencia',esc_procedencia);
        datos.append('ap_pat_tutor',ap_pat_tutor);
        datos.append('ap_mat_tutor',ap_mat_tutor);
        datos.append('nombre_tutor',nombre_tutor);
        datos.append('edad_tutor',edad_tutor);
        datos.append('grado_estudios',grado_estudio);
        datos.append('ocupacion',ocupacion);
        datos.append('calle_tutor',calle_tutor);
        datos.append('num_int_tutor',num_int_tutor);
        datos.append('num_ext_tutor',num_ext_tutor);
        datos.append('colonia_tutor',colonia_tutor);
        datos.append('alcaldia_tutor',alcaldia_tutor);
        datos.append('entidad_tutor',entidad_tutor);
        datos.append('cp_tutor',cp_tutor);
        datos.append('tel_fijo',tel_fijo);
        datos.append('tel_cel',tel_cel);
        datos.append('tel_ofi',tel_ofi);
        datos.append('email_tutor',email_tutor);
        datos.append('submit',$('#btnForm').val());

        //console.log(...datos);

        enviarDatos(datos);
      } 
  });

  function enviarDatos(datos){
    $.ajax({
      url:"modelos_ajax/modelo_inscripcion.php",
      method:"POST",
      data: datos,
      cache: false, 
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta) {
          
          //$('.form')[0].reset(); 
         
          if(respuesta){
            console.log("respuesta ",respuesta);
            //$('#form-inscrip').fadeOut('fast');
            //$('#list-doc').fadeIn('slow');
            //obtenemos la posición en la que se encuentra el botón
            var posicion_form = $(".img-back-blue").offset().top;
            
            $("html, body").animate({scrollTop:posicion_form+"px"});
            $("#form-inscrip").css({"left": "-100%", "display":'none'});
            $("#list-doc").css({"left": "0","display":'block'});        
          }
      }
    })

  }

});
 


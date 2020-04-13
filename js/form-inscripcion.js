var formulario = document.getElementById('form-inscrip'),
    list_doc = document.getElementById('list-doc'),
    esc_proc_si = document.getElementById('si'),
    esc_proc_no = document.getElementById('no'),
    esc_procedencia = document.getElementById('esc-procedencia');

const regText = /^[ÑA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;
const regNum = /^([0-9])*$/;
const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

eventListener();

function eventListener() {
  //se carga aplicacion y deshabilitamos el boton  
  document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
  esc_procedencia.disabled = true;
    
  esc_proc_si.addEventListener('change', validarCheck);
  esc_proc_no.addEventListener('change', validarCheck);

  document.getElementById("btnForm").addEventListener('click', validar, false);
}

function validarCheck(e) {
  if (e.target.checked && e.target.value === 'si') {
    esc_procedencia.disabled = false;
    esc_procedencia.focus();
 } else if (e.target.checked && e.target.value === "no") {
    esc_procedencia.disabled = true;     
 }
}

function validaRadioEsc(){
  var opcion = document.getElementsByName('esc-proc');
  limpiarError('error-esc');
  limpiarError('error-proc');
  
  for (var i = 0; i < opcion.length; i++) {
    if (opcion[i].checked == true) {
      var v_opcion = opcion[i].value;
    }
  }

  if (!v_opcion) {
    error2('error-esc', 'Seleccione una opción');
    return false;
  }else if(v_opcion == 'si' && esc_procedencia.value == ""){
    error(esc_procedencia,'error-proc','Ingresa una escuela de procedencia');
    return false;
  }
  return true;
}

function validaGrado() {
  var grado = document.getElementsByName('grado');
  limpiarError('error-grado');

  for (var i = 0; i < grado.length; i++) {
    if (grado[i].checked == true) {
      var v_grado = grado[i].value;
    }
  }

  if (!v_grado) {
    error2('error-grado', 'Seleccione una opción');
    return false;
  }
  return true;
}

function validaGenero() {
  var genero = document.getElementsByName('genero');
  limpiarError('error-genero');

  for (var i = 0; i < genero.length; i++) {
    if (genero[i].checked == true) {
      var v_genero = genero[i].value;
    }
  }

  if (!v_genero) {
    error2('error-genero', 'Seleccione una opción');
    return false;
  }
  return true;
}

function validaLugar(){
  var lugar_nac = document.getElementById('lugar-nac');
  limpiarError('error-lugar');

  if(lugar_nac.value == ""){
    error2('error-lugar','Selecciona una opción');
    return false;
  }

  return true;
}

function validaEstudio(){
  var grado_estudio = document.getElementById('grado-estudio');
  limpiarError('error-estudio');

  if(grado_estudio.value == ""){
    error2('error-estudio','Selecciona una opción');
    return false;
  }

  return true;
}

function validaText(campo) {
  limpiarError('error-ape-1');
  limpiarError('error-ape-2');
  limpiarError('error-nombre-1');
  limpiarError('error-religion');
  limpiarError('error-tipo');
  limpiarError('error-alca-1');
  limpiarError('error-enti-1');  
  limpiarError('error-ape-3');
  limpiarError('error-ape-4');
  limpiarError('error-nombre-2');
  limpiarError('error-ocupacion');
  limpiarError('error-alca-2');
  limpiarError('error-enti-2');

  if (campo.value.trim() == "" || !regText.test(campo.value.trim())) {
    if (campo.name == "ap-pat-alu") {
      error(campo, 'error-ape-1', "Ingrese un apellido.");      
    }else if (campo.name == "ap-mat-alu") {
      error(campo, 'error-ape-2', "Ingrese un apellido.");      
    }else if(campo.name == "religion"){
      error(campo,'error-religion', "Ingrese una religión de lo contrario coloca ninguna.");
    }else if(campo.name == "tipo-s"){
      error(campo,'error-tipo', "Ingrese un tipo de sangre.");
    }else if(campo.name == "nombre-alu"){
      error(campo,'error-nombre-1', "Ingrese un nombre.");
    }else if(campo.name == "alcaldia-alu"){
      error(campo,'error-alca-1','Ingrese una alcaldía o municipio'); 
    }else if(campo.name == "entidad-alu"){
      error(campo,'error-enti-1','Ingrese una entidad federativa');
    }if (campo.name == "ap-pat-tutor") {
      error(campo, 'error-ape-3', "Ingrese un apellido.");      
    }else if (campo.name == "ap-mat-tutor") {
      error(campo, 'error-ape-4', "Ingrese un apellido.");      
    }else if(campo.name == "nombre-tutor"){
      error(campo,'error-nombre-2', "Ingrese un nombre.");
    }else if(campo.name == "ocupacion"){
      error(campo,'error-ocupacion', "Ingrese una ocupación.");
    }else if(campo.name == "alcaldia-tutor"){
      error(campo,'error-alca-2','Ingrese una alcaldía o municipio'); 
    }else if(campo.name == "entidad-tutor"){
      error(campo,'error-enti-2','Ingrese una entidad federativa');
    } 

    return false;
  }
  return true;
}

function validaEdad(campo){
  limpiarError('error-edad-1');
  limpiarError('error-edad-2');

  if(campo.value.trim() == ""){
    if(campo.name == 'edad-alu'){
      error(campo, 'error-edad-1','Ingrese una edad.');
    }else if(campo.name == 'edad-tutor'){
      error(campo, 'error-edad-2','Ingrese una edad.');
    }
    return false;
  }
  
  if(campo.name == 'edad-alu'){
    if(!regNum.test(campo.value.trim()) || campo.value.trim() < '3' || campo.value.trim() > '5'){
      error(campo, 'error-edad-1','Ingrese una edad válida.');
      return false;
    }
  }else if(campo.name == 'edad-tutor'){
    if(!regNum.test(campo.value.trim()) || campo.value.trim().length > 2){
      error(campo, 'error-edad-2','Ingrese una edad válida.');
      return false;
    }
  }

  return true;  
}

function validaCurp(){
  var curp = document.getElementById('curp');
  limpiarError('error-curp');

  if(curp.value.trim() == ""){
    error(curp,'error-curp','Ingrese un curp.');
    return false;
  }else if(curp.value.trim().length > 18 || curp.value.trim().length < 18){
    error(curp,'error-curp','El curp debe tener 18 caracteres');
    return false;
  }

  return true;
}

function validaCampoVacio(campo){
  limpiarError('error-calle-1');
  limpiarError('error-int-1');
  limpiarError('error-ext-1');
  limpiarError('error-colonia-1');
  limpiarError('error-calle-2');
  limpiarError('error-int-2');
  limpiarError('error-ext-2');
  limpiarError('error-colonia-2');
 
  if (campo.value.trim() == "") {
    if (campo.name == "calle-alu") {
      error(campo, 'error-calle-1', "Ingrese una calle.");      
    }else if (campo.name == "num-int-alu") {
      error(campo, 'error-int-1', "Ingrese un número o bien ingrese S/N.");      
    }else if(campo.name == "num-ext-alu"){
      error(campo,'error-ext-1', "Ingrese un número exterior.");
    }else if(campo.name == "colonia-alu"){
      error(campo, 'error-colonia-1', 'Ingrese una colonia.');
    }else if (campo.name == "calle-tutor") {
      error(campo, 'error-calle-2', "Ingrese una calle.");      
    }else if (campo.name == "num-int-tutor") {
      error(campo, 'error-int-2', "Ingrese un número o bien ingrese S/N.");      
    }else if(campo.name == "num-ext-tutor"){
      error(campo,'error-ext-2', "Ingrese un número exterior.");
    }else if(campo.name == "colonia-tutor"){
      error(campo, 'error-colonia-2', 'Ingrese una colonia.');
    }
    return false;
  }
  return true;
   
}

function validaCp(campo){
  limpiarError('error-cp-1');
  limpiarError('error-cp-2');

  if(campo.value.trim() == "" || !regNum.test(campo.value.trim())){
    if(campo.name == "cp-alu"){
      error(campo,'error-cp-1','Ingrese un código postal.');
    }else if(campo.name == 'cp-tutor'){
      error(campo,'error-cp-2','Ingrese un código postal.');
    }   
    return false;
  }else if(campo.value.trim().length < 5 || campo.value.trim().length > 5){
     if(campo.name == "cp-alu"){
      error(campo,'error-cp-1','Ingrese un código postal válido.');
    }else if(campo.name == 'cp-tutor'){
      error(campo,'error-cp-2','Ingrese un código postal válido.');
    } 
    return false;
  }
  return true;
}

function validaTel(campo){
  limpiarError('error-tel-1');
  limpiarError('error-tel-2');
  limpiarError('error-tel-3');

  if(campo.value.trim() == "" || !regNum.test(campo.value.trim())){
    if(campo.name == "tel-fijo"){
      error(campo, 'error-tel-1', "Ingrese un teléfono");
    }else if(campo.name == "tel-cel"){
      error(campo, 'error-tel-2', "Ingrese un teléfono");
    }else{
      error(campo, 'error-tel-3', "Ingrese un teléfono");
    }
    return false;
  }
  return true;
} 
 
function validaEmail(){
  limpiarError('error-email');
  var email_tutor = document.getElementById('email-tutor');

  if(email_tutor.value.trim() == ""){
    error(email_tutor, 'error-email',"Ingrese un correo electrónico.");
    return false;
  }else if(!regEmail.test(email_tutor.value.trim())){
    error(email_tutor, 'error-email', 'Ingrese un correo electrónico válido.');
    return false;
  }

  return true;
}


function error(elemento, div_error, mensaje) {
  document.getElementById(div_error).textContent = mensaje;
  document.getElementById(div_error).className = "error";
  elemento.focus();
}

function error2(div_error, mensaje) {
  document.getElementById(div_error).textContent = mensaje;
  document.getElementById(div_error).className = "error";
}

function limpiarError(div_error){
  document.getElementById(div_error).textContent = "";
  document.getElementById(div_error).className = "";
}

function validar(e) {
  var ap_pat_alu = document.getElementById('ap-pat-alu'),
      ap_mat_alu = document.getElementById('ap-mat-alu'),
      nombre_alu = document.getElementById('nombre-alu'),
      edad_alu = document.getElementById('edad-alu'),
      religion = document.getElementById('religion'),
      tipo_s = document.getElementById('tipo-s'),
      calle_alu = document.getElementById('calle-alu'),
      num_int_alu = document.getElementById('num-int-alu'),
      num_ext_alu = document.getElementById('num-ext-alu'),
      colonia_alu = document.getElementById('colonia-alu'),
      alcaldia_alu = document.getElementById('alcaldia-alu'),
      entidad_alu = document.getElementById('entidad-alu'),
      cp_alu = document.getElementById('cp-alu'),
      ap_pat_tutor = document.getElementById('ap-pat-tutor'),
      ap_mat_tutor = document.getElementById('ap-mat-tutor'),
      nombre_tutor = document.getElementById('nombre-tutor'),
      edad_tutor = document.getElementById('edad-tutor'),
      ocupacion = document.getElementById('ocupacion'),
      calle_tutor = document.getElementById('calle-tutor'),
      num_int_tutor = document.getElementById('num-int-tutor'),
      num_ext_tutor = document.getElementById('num-ext-tutor'),
      colonia_tutor = document.getElementById('colonia-tutor'),
      alcaldia_tutor = document.getElementById('alcaldia-tutor'),
      entidad_tutor = document.getElementById('entidad-tutor'),
      cp_tutor = document.getElementById('cp-tutor'),
      tel_fijo = document.getElementById('tel-fijo'),
      tel_cel = document.getElementById('tel-cel'),
      tel_ofi = document.getElementById('tel-ofi');
      
  if (validaGrado() && validaText(ap_pat_alu) && validaText(ap_mat_alu) && validaText(nombre_alu) && validaEdad(edad_alu) &&
      validaCurp() && validaGenero() && validaLugar() && validaText(religion) && validaText(tipo_s) && validaCampoVacio(calle_alu) &&
      validaCampoVacio(num_int_alu) && validaCampoVacio(num_ext_alu) && validaCampoVacio(colonia_alu) && validaText(alcaldia_alu) &&
      validaText(entidad_alu) && validaCp(cp_alu) && validaRadioEsc() && validaText(ap_pat_tutor) && validaText(ap_mat_tutor) &&
      validaText(nombre_tutor) && validaEdad(edad_tutor) && validaEstudio() && validaText(ocupacion) && validaCampoVacio(calle_tutor) &&
      validaCampoVacio(num_int_tutor) && validaCampoVacio(num_ext_tutor) && validaCampoVacio(colonia_tutor) && validaText(alcaldia_tutor) &&
      validaText(entidad_tutor) && validaCp(cp_tutor) && validaTel(tel_fijo) && validaTel(tel_cel) && validaTel(tel_ofi) && validaEmail() &&
      confirm("Pulsa aceptar para continuar con el proceso de inscripción")) {     
      
      return true;
  } else {
    e.preventDefault();
    return false;
  }
}

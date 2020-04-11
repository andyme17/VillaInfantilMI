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

function validaLugar(){
  var lugar_nac = document.getElementById('lugar-nac');
  limpiarError('error-lugar');

  if(lugar_nac.value == ""){
    error2('error-lugar','Selecciona una opción');
    return false;
  }

  return true;
}

function validaText(campo) {
  limpiarError('error-ape-1');
  limpiarError('error-ape-2');
  limpiarError('error-religion');
  limpiarError('error-tipo');

  if (campo.value.trim() == "" || !regText.test(campo.value.trim())) {
    if (campo.name == "ap-pat-alu") {
      error(campo, 'error-ape-1', "Ingrese un apellido");      
    }else if (campo.name == "ap-mat-alu") {
      error(campo, 'error-ape-2', "Ingrese un apellido");      
    }else if(campo.name == "religion"){
      error(campo,'error-religion', "Ingresa una religión de lo contrario coloca ninguna");
    }else if(campo.name == "tipo-s"){
      error(campo,'error-tipo', "Ingresa un tipo de sangre");
    }

    return false;
  }
  return true;
}
/* 
function validaEmail(){
  limpiarError('error-email');
  var email_tutor = document.getElementById('email-tutor');

  if(email_tutor.value.trim() == ""){
    error(campo, 'error-email',"Ingresa un correo electrónico");
    return false;
  }

  return true;
} */


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
      religion = document.getElementById('religion'),
      tipo_s = document.getElementById('tipo-s');

     // console.log(validaEmail());
     
  if (validaGrado() && validaText(ap_pat_alu) && validaText(ap_mat_alu) && validaLugar() && validaText(religion) && validaText(tipo_s) && 
      validaRadioEsc() && confirm("Pulsa aceptar para continuar con el proceso de inscripción")
  ) {     
    return true;
  } else {
    e.preventDefault();
    return false;
  }
}

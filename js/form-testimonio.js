var formulario = document.getElementById('form-gestor'),
    mensaje = document.getElementById('mensaje'),
    nombre = document.getElementById('nombre'),
    email = document.getElementById('email');

const regText = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

eventListener();

function eventListener() {
    //se carga aplicacion y deshabilitamos el boton  
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

function countChar() {

    var total = 200;

    setTimeout(function () {
        var respuesta = document.getElementById('res');
        var cantidad = mensaje.value.length;

        respuesta.innerHTML = cantidad + ' caractere/s, te quedan ' + (total - cantidad);
        if (cantidad >= total) {
            respuesta.classList.remove('text-secondary');
            respuesta.classList.add('text-danger');
        } else {
            respuesta.classList.remove('text-danger');
            respuesta.classList.add('text-secondary');
        }
    }, 10);

}

function limita(maximoCaracteres) {
    if (mensaje.value.length >= maximoCaracteres) {
        return false;
    } else {
        return true;
    }
}

function validaCal(){
    var votacion = document.getElementsByName('votacion');
    limpiarError('error-vot');
    
    for (var i=0; i<votacion.length; i++) {
        if (votacion[i].checked == true) {
            var valor_votacion = votacion[i].value;        
        }
    } 
    
    if(!valor_votacion){  
        document.getElementById('error-vot').textContent = 'Por favor, califica nuestro servicio.';
        document.getElementById('error-vot').className = "error";
        return false;      
    }

    return true;
}

function validaNombre(campo) {
    limpiarError('error_nombre');
   
    if (campo.value.trim() == "" || !regText.test(campo.value.trim())) {
        error(campo, 'error_nombre', "Ingrese un nombre.");
        return false;
    }

    return true;
}

function validaEmail(){
    limpiarError('error-correo');
      
    if(email.value.trim() == ""){
      error(email, 'error-correo',"Ingrese un correo electrónico.");
      return false;
    }else if(!regEmail.test(email.value.trim())){
      error(email, 'error-correo', 'Ingrese un correo electrónico válido.');
      return false;
    }
  
    return true;
}

function validaMsj(campo){
    limpiarError('error-msj');

    if(campo.value.trim() == ""){
        error(campo, 'error-msj', "Ingrese el comentario o sugerencia.");
        return false;
    } else if (campo.value.trim().length > 200){
        error(campo, 'error-msj', "El comentario sólo puede tener máximo 200 caracteres.");
        return false;
    }
    return true;
}

function error(elemento, div_error, mensaje) {
    document.getElementById(div_error).textContent = mensaje;
    document.getElementById(div_error).className = "error";
    elemento.focus();
}

function limpiarError(div_error) {
    document.getElementById(div_error).textContent = "";
    document.getElementById(div_error).className = "";
}

function validar(e) {
    if (validaNombre(nombre) && validaEmail() && validaCal() && validaMsj(mensaje) && confirm("Pulsa aceptar para actualizar la sección de testimonios")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

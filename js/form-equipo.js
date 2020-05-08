var formulario = document.getElementById('form-gestor'),
    mensaje = document.getElementById('mensaje');

const regText = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

eventListener();

function eventListener() {
    //se carga aplicacion y deshabilitamos el boton  
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

function countChar() {

    var total = 290;

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

function validaMsj(campo){
    limpiarError('error-msj');

    if(campo.value.trim() == ""){
        error(campo, 'error-msj', "Ingrese el mensaje.");
        return false;
    } else if (campo.value.trim().length > 290){
        error(campo, 'error-msj', "La descripción sólo puede tener máximo 290 caracteres.");
        return false;
    }
    return true;
}

function validaImagen(obj){
    var uploadFile = obj.files[0];
       
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|jpeg)$/i).test(uploadFile.name)) {
        error(obj,'error-thumb','Formato de imagen no válido.');   
        document.getElementById('thumb').value = "";
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 958 && this.height.toFixed(0) != 627) {
                error(obj,'error-thumb','Las dimensiones de la fotografía deben ser de 958 x 627px.'); 
                document.getElementById('thumb').value = "";               
            }else if(uploadFile.name.length > 200){
                error(obj,'error-thumb','El nombre del archivo no debe exceder los 200 caracteres. Por favor, modifica el nombre.');                
                document.getElementById('thumb').value = "";    
            }else if (uploadFile.size > 175000){
                error(obj,'error-thumb','El tamaño de la imagen no puede exceder los 170 KB');                
                document.getElementById('thumb').value = "";               
            }else{
                limpiarError('error-thumb');
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
}

function validaImagen2(){
    var  thumb = document.getElementById('thumb');
    limpiarError('error-thumb');

    if(thumb.value == ""){
        error(thumb,'error-thumb','Ingrese la fotografía del evento');
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
    if (validaMsj(mensaje) && validaImagen2() && confirm("Pulsa aceptar para actualizar la sección")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}
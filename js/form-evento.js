var formulario = document.getElementById('form-gestor'),
    descripcion = document.getElementById('descripcion');

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

    var total = 300;

    setTimeout(function () {
        var respuesta = document.getElementById('res');
        var cantidad = descripcion.value.length;

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
    if (descripcion.value.length >= maximoCaracteres) {
        return false;
    } else {
        return true;
    }
}

function validaTitulo() {
    var titulo = document.getElementById('titulo');
    limpiarError('error-titulo');

    if (titulo.value.trim() == "" || !regText.test(titulo.value.trim())) {
        error(titulo, 'error-titulo', "Ingrese el título del evento.");
        return false;
    }
    return true;
}

function validaDesc(campo){
    limpiarError('error-desc');

    if(campo.value.trim() == ""){
        error(campo, 'error-desc', "Ingrese la descripción del evento.");
        return false;
    } else if (campo.value.trim().length > 300){
        error(campo, 'error-desc', "La descripción sólo puede tener máximo 300 caracteres.");
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
            if (this.width.toFixed(0) != 960 && this.height.toFixed(0) != 720) {
                error(obj,'error-thumb','Las dimensiones de la fotografía deben ser de 960 x 720px.'); 
                document.getElementById('thumb').value = "";               
            }
            else if (uploadFile.size > 260000){
                error(obj,'error-thumb','El tamaño de la imagen no puede exceder los 250 KB');                
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
    if (validaTitulo() && validaDesc(descripcion) && validaImagen2() &&
        confirm("Pulsa aceptar para actualizar la sección de eventos.")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

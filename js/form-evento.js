var formulario = document.getElementById('form-gestor'),
    descripcion = document.getElementById('descripcion'),
    titulo = document.getElementById('titulo');

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

function validaText(campo) {
    limpiarError('error-titulo');

    if (campo.value.trim() == "" || !regText.test(campo.value.trim())) {
        if (campo.name == "titulo") {
            error(campo, 'error-titulo', "Ingrese el título del evento.");
        } else if (campo.name == "descripcion") {
            error(campo, 'error-desc', "Ingrese la descripción del evento.");
        }
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
    if (validaText(titulo) && validaText(descripcion) && confirm("Pulsa aceptar para actualizar la sección de eventos")) {

        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

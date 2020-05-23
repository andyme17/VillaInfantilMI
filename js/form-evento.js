/**
 * Script for events form 
*/

//form fields
var titulo = document.getElementById('titulo'),
    descripcion = document.getElementById('descripcion'),
    fecha = document.getElementById('fecha'),
    thumb = document.getElementById('thumb'),
    flag1 = false;
    flag2 = false;
    flag3 = false;

eventListener();

function eventListener() {
    //se carga aplicacion y deshabilitamos el boton  
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

document.getElementById("btnCloseForm").addEventListener('click',function(){
    location.href="eventos.php";
});

titulo.addEventListener('change', function () {
    return flag1 = true;
});

descripcion.addEventListener('change', function () {
    return flag2 = true;
});

fecha.addEventListener('change', function () {
    return flag3 = true;
});

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

function validaCampo(campo) {
    limpiarError('error-titulo');
    limpiarError('error-desc');
    limpiarError('error-fecha');

    if (campo.name == "titulo") {
        if (campo.value.trim() == "") {
            error(campo, 'error-titulo', "Ingrese el título del evento.");
            return false;
        }
    } else if (campo.name == "descripcion") {
        if (campo.value.trim() == "") {
            error(campo, 'error-desc', "Ingrese la descripción del evento.");
            return false;
        } else if (campo.value.trim().length > 300) {
            error(campo, 'error-desc', "La descripción sólo puede tener máximo 300 caracteres.");
            return false;
        }
    } else if (campo.name == "fecha") {
        if (campo.value.trim() == "") {
            error(campo, 'error-fecha', "Ingrese la fecha del evento.");
            return false;
        }
    }
    return true;
}

function validaImagen(obj) {
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|jpeg)$/i).test(uploadFile.name)) {
        error(obj, 'error-thumb', 'Formato de imagen no válido.');
        document.getElementById('thumb').value = "";
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 960 && this.height.toFixed(0) != 720) {
                error(obj, 'error-thumb', 'Las dimensiones de la fotografía deben ser de 960 x 720px.');
                document.getElementById('thumb').value = "";
            }
            else if (uploadFile.size > 260000) {
                error(obj, 'error-thumb', 'El tamaño de la imagen no puede exceder los 250 KB');
                document.getElementById('thumb').value = "";
            } else if (uploadFile.name.length > 200) {
                error(obj, 'error-thumb', 'El nombre del archivo no debe exceder los 200 caracteres. Por favor, modifica el nombre.');
                document.getElementById('thumb').value = "";
            } else {
                limpiarError('error-thumb');
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }
}

function validaImagen2(campo) {    
    limpiarError('error-thumb');

    if (campo.value == "") {
        error(campo, 'error-thumb', 'Ingrese la fotografía del evento.');
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
    var action = document.getElementById('action').value;

    if (action === "new") {
        if (validaCampo(titulo) && validaCampo(descripcion) && validaCampo(fecha) && validaImagen2(thumb) &&
            confirm("Pulsa aceptar para añadir un nuevo evento.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    } else {
        if ((flag1 === false) && (flag2 === false) && (flag3 === false) && thumb.value =="") {
            if (confirm("Deseas salir sin realizar ningún cambio.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        } else {
            if (validaCampo(titulo) && validaCampo(descripcion) && validaCampo(fecha) &&
                confirm("Pulsa aceptar para actualizar la sección de eventos.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    }
}
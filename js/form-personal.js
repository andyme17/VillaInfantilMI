/**
 * Script for personal form 
*/

//form fields
var nombre = document.getElementById('nombre'),
    cargo = document.getElementById('cargo'),
    thumb = document.getElementById('thumb'),
    flag1 = false,
    flag2 = false;

//regular expressions
const regText = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

eventListener();

function eventListener() {
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

document.getElementById("btnCloseForm").addEventListener('click', function () {
    location.href = "personal_admin.php";
});

nombre.addEventListener('change', function () {
    return flag1 = true;
});

cargo.addEventListener('change', function () {
    return flag2 = true;
});

function validaText(campo) {
    limpiarError('error_nombre');
    limpiarError('error_cargo')

    if (campo.name == "nombre" && campo.value.trim() == "") {
        error(campo, 'error_nombre', "Ingrese un nombre.");
        return false;
    } else if ((campo.name == "cargo" && campo.value.trim() == "") ||
        (campo.name == "cargo" && !regText.test(campo.value.trim()))) {
        error(campo, 'error_cargo', "Ingrese un cargo.");
        return false;
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
            if (this.width.toFixed(0) != 300 && this.height.toFixed(0) != 360) {
                error(obj, 'error-thumb', 'Las dimensiones de la fotografía deben ser de 300 x 360px.');
                document.getElementById('thumb').value = "";
            }
            else if (uploadFile.size > 40000) {
                error(obj, 'error-thumb', 'El tamaño de la imagen no puede exceder los 35 KB');
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

function validaImagen2() {
    var thumb = document.getElementById('thumb');
    limpiarError('error-thumb');

    if (thumb.value == "") {
        error(thumb, 'error-thumb', 'Ingrese la fotografía.');
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

    if (action === 'new') {
        if (validaText(nombre) && validaText(cargo) && validaImagen2() &&
            confirm("Pulsa aceptar para añadir un nuevo miembro al personal.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    } else {
        if ((flag1 === false) && (flag2 === false) && thumb.value == "") {
            if (confirm("Deseas salir sin realizar ningún cambio.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        } else {
            if (validaText(nombre) && validaText(cargo) && confirm("Pulsa aceptar para actualizar la sección de personal.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    }
}

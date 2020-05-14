/**
 * Script for banner form 
*/

eventListener();

function eventListener() {
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

document.getElementById("btnCloseForm").addEventListener('click',function(){
    location.href="index.php";
});

function validaImagen(obj) {
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|jpeg|png)$/i).test(uploadFile.name)) {
        error(obj, 'error-thumb', 'Formato de imagen no válido.');
        document.getElementById('thumb').value = "";
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 1280 && this.height.toFixed(0) != 558) {
                error(obj, 'error-thumb', 'Las dimensiones de la fotografía deben ser de 1280 x 558 px.');
                document.getElementById('thumb').value = "";
            } else if (uploadFile.size > 500000) {
                error(obj, 'error-thumb', 'El tamaño de la imagen no puede exceder los 490 KB');
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
        error(thumb, 'error-thumb', 'Ingrese la fotografía del servicio');
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
    var thumb = document.getElementById('thumb');

    if (thumb.value == "") {
        if (confirm("Deseas salir sin realizar ningún cambio.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    } else {
        if (confirm("Pulsa aceptar para editar el banner.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    }
}

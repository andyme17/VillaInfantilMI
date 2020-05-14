/**
 * Script for contact form 
*/

//form fields
var mensaje = document.getElementById('mensaje'),
    nombre = document.getElementById('nombre'),
    votacion = document.getElementsByName('votacion'),
    radio1 = document.getElementById('radio1'),
    radio2 = document.getElementById('radio2'),
    radio3 = document.getElementById('radio3'),
    radio4 = document.getElementById('radio4'),
    radio5 = document.getElementById('radio5'),
    flag1 = false,
    flag2 = false,
    flag3 = false;

//regular expressions    
const regExp = /^([0-9])*$/;

eventListener();

function eventListener() {
    //se carga aplicacion y deshabilitamos el boton  
    document.addEventListener('DOMContentLoaded', iniciar);    
}

function iniciar() {
    radio1.addEventListener('change', validarVot); 
    radio2.addEventListener('change', validarVot);
    radio3.addEventListener('change', validarVot);
    radio4.addEventListener('change', validarVot);
    radio5.addEventListener('change', validarVot);
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

function validarVot(e){    
    if(e.target.checked){
        return flag3 = true;
    }
}

nombre.addEventListener('change', function () {
    return flag1 = true;
});

mensaje.addEventListener('change', function () {
    return flag2 = true;
});

document.getElementById("btnCloseForm").addEventListener('click',function(){
    location.href="testimonios.php";
});

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

function validaVotacion(votacion) {
    limpiarError('error-vot');

    for (var i = 0; i < votacion.length; i++) {
        if (votacion[i].checked == true) {
            var valor_votacion = votacion[i].value;
        }
    }

    if (!valor_votacion) {
        document.getElementById('error-vot').textContent = 'Por favor, califica nuestro servicio.';
        document.getElementById('error-vot').className = "error";
        return false;
    }

    return true;
}

function validaNombre(campo) {
    limpiarError('error_nombre');

    if (campo.value.trim() == "" || regExp.test(campo.value.trim())) {
        error(campo, 'error_nombre', "Ingrese un nombre.");
        return false;
    }

    return true;
}

function validaMsj(campo) {
    limpiarError('error-msj');

    if (campo.value.trim() == "") {
        error(campo, 'error-msj', "Ingrese el comentario o sugerencia.");
        return false;
    } else if (campo.value.trim().length > 200) {
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
    var action = document.getElementById('action').value;

    if(action === "new"){
        if (validaNombre(nombre) && validaVotacion(votacion) && validaMsj(mensaje) && confirm("Pulsa aceptar para añadir el testimonio.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    }else{
        if ((flag1 === false) && (flag2 === false) && (flag3 === false)) {
            if (confirm("Deseas salir sin realizar ningún cambio.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        } else {
            if (validaNombre(nombre) && validaVotacion(votacion) && validaMsj(mensaje) && confirm("Pulsa aceptar para actualizar la sección de testimonios.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    }
}

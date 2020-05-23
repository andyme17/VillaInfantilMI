/**
 * Script for service form 
*/

//regular expressions
const regText = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

//variables
var flag1 = false;

eventListener();

function eventListener() {     
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

document.getElementById("btnCloseForm").addEventListener('click',function(){
    location.href="servicios_afterschool.php";
});

servicio.addEventListener('change', function () {
    return flag1 = true;
});

function validaServicio() {
    var servicio = document.getElementById('servicio');
    limpiarError('error-servicio');

    if (servicio.value.trim() == "" || !regText.test(servicio.value.trim())) {
        error(servicio, 'error-servicio', "Ingrese el nombre del servicio.");
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
            if (this.width.toFixed(0) != 627 && this.height.toFixed(0) != 417) {
                error(obj,'error-thumb','Las dimensiones de la fotografía deben ser de 627 x 417px.'); 
                document.getElementById('thumb').value = "";               
            }
            else if (uploadFile.size > 75000){
                error(obj,'error-thumb','El tamaño de la imagen no puede exceder los 70 KB');                
                document.getElementById('thumb').value = "";               
            }else if(uploadFile.name.length > 200){
                error(obj,'error-thumb','El nombre del archivo no debe exceder los 200 caracteres. Por favor, modifica el nombre.');                
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
        error(thumb,'error-thumb','Ingrese la imagen del servicio');
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
        if (validaServicio() && validaImagen2() && confirm("Pulsa aceptar para agregar el servicio.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }   
    } else {
        if ((flag1 === false) && thumb.value == "") {
            if (confirm("Deseas salir sin realizar ningún cambio.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        } else {
            if (validaServicio() && confirm("Pulsa aceptar para actualizar la sección de servicios.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    }
}



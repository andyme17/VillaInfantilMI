/**
 * Script for opinion form 
*/

//form fields
const nombre = document.getElementById('nombre'),
      email = document.getElementById('email'),
      mensaje = document.getElementById('mensaje'),        
      btnForm = document.getElementById('btnForm');

const formOpinion = document.getElementById('form-opinion');

//error divs
var errorNombre = document.getElementById('error-nombre'),
    errorEmail = document.getElementById('error-email'),
    errorVotacion = document.getElementById('error-votacion'),
    errorMensaje = document.getElementById('error-mensaje');

//regular expressions
const regexTexto = /^[a-z][a-z]*/;
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

eventListener();

function eventListener(){
    document.addEventListener('DOMContentLoaded', inicioApp);

    nombre.addEventListener('blur',validarCampo);
    email.addEventListener('blur',validarCampo);
    mensaje.addEventListener('blur',validarCampo);  
         
    formOpinion.addEventListener('submit', leerFormulario);
}

function inicioApp(){    
    btnForm.disabled = true;
}

function countChar(){
		
    var total=200;

    setTimeout(function(){
        var respuesta = document.getElementById('res');
        var cantidad = mensaje.value.length;

        respuesta.innerHTML = cantidad + ' caractere/s, te quedan ' + (total - cantidad) ;
        if(cantidad >= total){       
            respuesta.classList.remove('text-secondary');   
            respuesta.classList.add('text-danger');
        }
        else {
            respuesta.classList.remove('text-danger'); 
            respuesta.classList.add('text-secondary');
        }
    },10);

}

function limita(maximoCaracteres) {
    if(mensaje.value.length >= maximoCaracteres ) {
      return false;
    }
    else {
      return true;
    }
}

function validarCampo(){
    if(this.name === 'nombre'){
        if(nombre.value.trim() === '' || !regexTexto.test(nombre.value.trim().toLowerCase())){
            errorNombre.style.display = 'block';
            errorNombre.innerHTML = 'Por favor, ingresa un nombre.';
            errorNombre.classList.add('error');
            nombre.focus();
        }else{
            errorNombre.style.display = 'none';
            errorNombre.classList.remove('error');           
        }         
    }else if(this.name === 'email'){
        if(email.value.trim() === ''){
            errorEmail.style.display = 'block';
            errorEmail.innerHTML = 'Por favor, ingresa un correo electrónico';          
            errorEmail.classList.add('error');
            email.focus();
        }else if(!regexEmail.test(email.value.trim())){ 
            errorEmail.style.display = 'block';
            errorEmail.innerHTML = 'Por favor, ingresa un correo valido.';  
            errorEmail.classList.add('error');  
            email.focus(); 
        }else{            
            errorEmail.style.display = 'none';
            errorEmail.classList.remove('error');  
        }       
    }else if(this.name === 'mensaje'){
        if(mensaje.value.trim() === ''){  
            errorMensaje.style.display = 'block';
            errorMensaje.innerHTML = 'Por favor, ingresa un comentario o sugerencia.';    
            errorMensaje.classList.add('error');
            mensaje.focus(); 
        }else{
            errorMensaje.style.display = 'none';
            errorMensaje.classList.remove('error');
            
        }       
    }
  
    if(email.value !== '' && nombre.value !== '' && mensaje.value !== ''){        
        if(document.querySelectorAll('.error').length === 0){
            btnForm.className = 'btn btn-primary';
            btnForm.disabled = false;       
        }      
    }else{
       btnForm.disabled = true;
       btnForm.className = 'btn btn-form-primary';
    }
}

function leerFormulario(e){
    e.preventDefault();

    let votacion = document.getElementsByName('votacion');

    for (var i=0; i<votacion.length; i++) {
        if (votacion[i].checked == true) {
            var valor_votacion = votacion[i].value;        
        }
    } 

    if(!valor_votacion){  
        errorVotacion.style.display = 'block';
        errorVotacion.innerHTML = 'Por favor, califica nuestro servicio.';

        setTimeout(()=>{
            errorVotacion.style.display = 'none';
        },3000);
    } else {
        const datosComentario = new FormData();
        
        datosComentario.append('nombre',nombre.value);
        datosComentario.append('email',email.value);
        datosComentario.append('votacion',valor_votacion);
        datosComentario.append('mensaje',mensaje.value);
        datosComentario.append('submit',btnForm.value);
 
        enviarComentario(datosComentario);            
    }       
}   

function enviarComentario(datos){
    const xhr = new XMLHttpRequest();

    xhr.open('POST','modelos_ajax/modelo_opinion.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText);           

            notificacionCorrecta();       
            formOpinion.reset();
            document.getElementById('res').innerHTML = 0 + ' caractere/s, te quedan ' + 200;

        }        
    }

    xhr.send(datos);
}

function notificacionCorrecta(){
    const spinnerGif = document.getElementById('spinner');
    spinnerGif.style.display = 'block';

    const enviado = document.createElement('img');
    enviado.src = 'img/mail.gif';
    enviado.style.display = 'block';
    enviado.alt = 'Imagen de icono de loading';

    const textEnviado = document.createElement('p');
    textEnviado.textContent = 'Mensaje enviado correctamente';

    setTimeout(function(){
        spinnerGif.style.display = 'none';
        document.getElementById('loaders').appendChild(enviado);
        document.getElementById('loaders').appendChild(textEnviado);
        setTimeout(function(){
            textEnviado.remove();
            enviado.remove();
            formOpinion.reset();
            btnForm.disabled = true;
            btnForm.className = 'btn btn-form-primary';
        },5000);
    },3000);         
}


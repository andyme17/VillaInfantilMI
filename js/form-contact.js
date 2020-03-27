/**
 * Script for contact form 
*/

//form fields
const nombre = document.getElementById('nombre'),
      email = document.getElementById('email'),
      mensaje = document.getElementById('mensaje'),        
      btnForm = document.getElementById('btnForm');
        
const formContact = document.getElementById('form-contact');

//error divs
var errorNombre = document.getElementById('error-nombre'),
    errorEmail = document.getElementById('error-email'),    
    errorMensaje = document.getElementById('error-mensaje');

//expresiones regulares
const regexTexto = /^[a-z][a-z]*/;
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

eventListener();

function eventListener(){
    //se carga aplicacion y deshabilitamos el boton  
    document.addEventListener('DOMContentLoaded', inicioApp);

    nombre.addEventListener('blur',validarCampo);
    email.addEventListener('blur',validarCampo);
    mensaje.addEventListener('blur',validarCampo);  
    
    formContact.addEventListener('submit', leerFormulario);
}

function inicioApp(){
    //deshabilitamos boton
    btnForm.disabled = true;
}

function validarCampo(){
    //se valida la longitud del campo y no este vacio     

    if(this.name === 'nombre'){
        if(nombre.value.trim() === '' || !regexTexto.test(nombre.value.trim().toLowerCase())){
            errorNombre.style.display = 'block';
            errorNombre.innerHTML = 'Por favor, ingresa un nombre.';
            errorNombre.classList.add('error');
            nombre.focus();
        }else{
            errorNombre.style.display = 'none';
            errorNombre.classList.remove('error');
            console.log(this.value);
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
            console.log(this.value);
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
            console.log(this.value);
        }       
    }
  
    if(email.value !== '' && nombre.value !== '' && mensaje.value !== ''){        
        if(document.querySelectorAll('.error').length === 0){
            console.log('el campo no esta vacio');
            btnForm.className = 'btn btn-primary';
            btnForm.disabled = false;       
        }      
    }else{
       btnForm.disabled = true;
       btnForm.className = 'btn btn-form-primary';
    }
}

//cuando se envia el formulario
function leerFormulario(e){
    e.preventDefault();

    //hace una llamada ajax  
    const datosContacto = new FormData();
    
    datosContacto.append('nombre',nombre.value);
    datosContacto.append('email',email.value);    
    datosContacto.append('mensaje',mensaje.value);
    datosContacto.append('submit',btnForm.value);
 
    enviarContacto(datosContacto);            
           
}   

//enviando los datos por ajax
function enviarContacto(datos){
    //creando objeto    
    const xhr = new XMLHttpRequest();

    //abriendo conexion
    xhr.open('POST','modelos_ajax/modelo_contacto.php', true);

    //se pasan los datos
    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText);           

            //mostramos notificacion
            notificacionCorrecta();       
                        
            //reseteamos formulario
            formOpinion.reset();
        }        
    }

    //se envian los datos
    xhr.send(datos);
}

//Notificacion exitosa
function notificacionCorrecta(){
    //se muestra al presionar el boton de enviar 
    const spinnerGif = document.getElementById('spinner');
    spinnerGif.style.display = 'block';

    //gif que envia email
    const enviado = document.createElement('img');
    enviado.src = 'img/mail.gif';
    enviado.style.display = 'block';

    const textEnviado = document.createElement('p');
    textEnviado.textContent = 'Mensaje enviado correctamente';


    //ocultar spinner y mostrar gif de enviado
    setTimeout(function(){
        spinnerGif.style.display = 'none';
        document.getElementById('loaders').appendChild(enviado);
        document.getElementById('loaders').appendChild(textEnviado);
        setTimeout(function(){
            textEnviado.remove();
            enviado.remove();
            formContact.reset();
            btnForm.disabled = true;
            btnForm.className = 'btn btn-form-primary';
        },5000);
    },3000);         
}


/**
 * Script for opinion form 
*/

const formOpinion = document.getElementById('form-opinion');

eventListener();

function eventListener(){
    //cuando el formulario se crear o editar se ejecuta
    formOpinion.addEventListener('submit', leerFormulario);
}

function leerFormulario(e){
    e.preventDefault();

    //form fields
    let nombre = document.getElementById('nombre'),
        email = document.getElementById('email'),
        mensaje = document.getElementById('mensaje'),
        votacion = document.getElementsByName('votacion');

    //error divs
    var errorNombre = document.getElementById('error-nombre'),
        errorEmail = document.getElementById('error-email');
        errorVotacion = document.getElementById('error-votacion');
        errorMensaje = document.getElementById('error-mensaje');

    //expresiones regulares
    const regexTexto = /^[a-z][a-z]*/;
    const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    
    
    for (var i=0; i<votacion.length; i++) {
        if (votacion[i].checked == true) {
            var valor_votacion = votacion[i].value;        
        }
    }

    if(nombre.value.trim() === '' || !regexTexto.test(nombre.value.trim().toLowerCase())){
        errorNombre.style.display = 'block';
        errorNombre.innerHTML = 'Por favor, ingresa un nombre.';

        setTimeout(()=>{
            errorNombre.style.display = 'none';
        },3000);
        
        nombre.focus();        
    }else if(email.value.trim() === ''){
        errorEmail.style.display = 'block';
        errorEmail.innerHTML = 'Por favor, ingresa un correo electrónico';

        setTimeout(()=>{
            errorEmail.style.display = 'none';
        },3000);
        
        email.focus();        
    }else if(!regexEmail.test(email.value.trim())){ 
        errorEmail.style.display = 'block';
        errorEmail.innerHTML = 'Por favor, ingresa un correo valido.';

        setTimeout(()=>{
            errorEmail.style.display = 'none';
        },3000);
        
        email.focus();         
    }else if(!valor_votacion){  
        errorVotacion.style.display = 'block';
        errorVotacion.innerHTML = 'Por favor, califica nuestro servicio.';

        setTimeout(()=>{
            errorVotacion.style.display = 'none';
        },3000);                      
    }else if(mensaje.value.trim() === ''){  
        errorMensaje.style.display = 'block';
        errorMensaje.innerHTML = 'Por favor, ingresa un comentario o sugerencia.';

        setTimeout(()=>{
            errorMensaje.style.display = 'none';
        },3500);    
            
        mensaje.focus();           
    }else{  
        //si la validacion es correcta hace una llamada ajax  
        const datosComentario = new FormData();
        datosComentario.append('nombre',nombre.value);
        datosComentario.append('email',email.value);
        datosComentario.append('votacion',valor_votacion);
        datosComentario.append('mensaje',mensaje.value);
        
        console.log(...datosComentario);

        enviarComentario(datosComentario);       
    }
}

//enviando los datos por ajax
function enviarComentario(datos){
    //creando objeto
    const xhr = new XMLHttpRequest();

    //abriendo conexion
    xhr.open('POST','modelos_ajax/modelo_opinion.php', true);

    //se pasan los datos
    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText); 

            console.log(xhr.responseText);
        }
    }

    //se envian los datos
    xhr.send(datos);
}

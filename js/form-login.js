/**
 * Script for login form 
*/

//form fields
const usuario = document.getElementById('usuario');
const pass = document.getElementById('pass');
const btnLogin = document.getElementById('btnLogin');
const formLogin = document.getElementById('form-login');

//error divs
var errorUsuario = document.getElementById('error-usuario'),
    errorPass = document.getElementById('error-pass');  

//regular expressions    
const regexTexto = /^[a-z][a-z]*/;

eventListener();

function eventListener(){
    document.addEventListener('DOMContentLoaded',inicioApp);

    usuario.addEventListener('blur',validarCampo);
    pass.addEventListener('blur',validarCampo);
}

function inicioApp(){
    btnLogin.disabled = true;
}

function validarCampo(){
    if(this.name === 'usuario'){
        if(usuario.value.trim() === '' || !regexTexto.test(usuario.value.trim().toLowerCase())){
            errorUsuario.style.display = 'block';
            errorUsuario.innerHTML = 'Por favor, ingresa un usuario.';
            errorUsuario.classList.add('error');
            usuario.focus();
        }else{
            errorUsuario.style.display = 'none';
            errorUsuario.classList.remove('error');            
        }    
    }else if(this.name === 'pass'){
        if(pass.value.trim() === ''){
            errorPass.style.display = 'block';
            errorPass.innerHTML = 'Por favor, ingresa una contraseña.';
            errorPass.classList.add('error');
            pass.focus();
        }else{
            errorPass.style.display = 'none';
            errorPass.classList.remove('error');            
        }    
    }

    if(usuario.value !== '' && pass.value !== ''){
        if(document.querySelectorAll('.error').length === 0){
            btnLogin.className = 'btn btn-primary';
            btnLogin.disabled = false;       
        }      
    }else{
       btnLogin.disabled = true;
       btnLogin.className = 'btn btn-form-primary';
    }
 
}

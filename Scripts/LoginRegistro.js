var Login=document.getElementById('Login');
var Registro=document.getElementById('Registro');
var Confirmado=false;
var Registrandose=false;
class Envio {
	////////////Enviar Registro
	Registro(Pass,RepPass){
	if(Confirmado){
		var Registro=document.getElementById('Registro');
		var Form=new FormData(Registro);
		fetch('Peticiones/Registro.php',{
		method:'POST',
		body:Form
	})
		.then(data=>data.text())
		.then(data=>{
		alert(data);
	})
	}
		else{
		alert("Existen errores en los campos de registro");
		}
}
////Validacion de Datos de registro
	Verificacion(Usuario,Pass,RepPass,Correo){
		Confirmado=true;
		var VerifUser=document.getElementById('VerifUser');
		var VerifPass=document.getElementById('VerifPass');
		var VerifPass2=document.getElementById('VerifPass2');
		var VerifCorreo=document.getElementById('VerifCorreo');
		if(Usuario.length<=6){
			VerifUser.textContent="El Usuario debe tener 6 o mas caracteres";
			VerifUser.style.display='inline';
			Confirmado=false;
		}
		else{
			VerifUser.style.display='none';
		}
		if(Pass.length<=6){
			VerifPass.textContent="La contraseña debe tener 6 o mas caracteres";
			VerifPass.style.display='inline';
			Confirmado=false;
		}
			else{
			VerifPass.style.display='none';
		}
			if(Pass==Usuario){
			VerifPass.textContent="Usuario y contraseña no pueden ser los mismos";
			VerifPass.style.display='inline';
			Confirmado=false;
		}
				if(Pass!=RepPass){
			VerifPass2.textContent="Las contraseñas no coinciden";
			VerifPass2.style.display='inline';
			Confirmado=false;
		}
				if(Pass==RepPass){
			VerifPass2.style.display='none';
		}
				if(!/.*@.*\..{3}/.test(Correo)){
			VerifCorreo.style.display='inline';
			VerifCorreo.textContent="Direccion de correo invalida";
				Confirmado=false;
				}
				else{
					VerifCorreo.style.display='none';
				}
	}
	////Inicio de Sesion
	Ingresar(){
		var UserName=document.getElementById('UserName');
		var UserPass=document.getElementById('UserPass');
		if(UserName.value<6 || UserPass.value<6){
			alert("Usuario o clave invalida");
		}
		else{
		var Form= new FormData(Login);
		fetch('Peticiones/InicioDeSesion.php',{
			method:'POST',
			body:Form
		})
		.then(data=>data.json())
		.then(data=>{
		if(data.Respuesta!="Confirmado"){
			alert(data.Respuesta);
		}
		else{
			alert("Bienvenid@ "+data.Usuario);
			window.location.replace('Index.php');
		}
		})
		}
	}
};
var EnviarDatos= new Envio();
///////Funciones
Registro.addEventListener('submit',function(e){
e.preventDefault();
EnviarDatos.Registro();
});
Registro.addEventListener('keyup',Verificar);
////Activa la validacion del registro
Registro.addEventListener('click',function(){
	Registrandose=true;
});
function Verificar(e){
if(Registrandose){
var Usuario=document.getElementById('RegistrarUsuario').value;
var Pass=document.getElementById('RegistrarContraseña').value;
var RepPass=document.getElementById('RepetirContraseña').value;
var Correo=document.getElementById('RegistrarCorreo').value;
EnviarDatos.Verificacion(Usuario,Pass,RepPass,Correo);	
}
}
Login.addEventListener('submit',function(e){
	e.preventDefault();
	EnviarDatos.Ingresar();
});
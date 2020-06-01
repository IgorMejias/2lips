<!DOCTYPE html>
<html lang="es">
<head>
<title>Bienvenid@ a 2lipS</title>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Css/LoginStyle.css">
</head>
<header>
	<div class="container">
	<div class="row">
	<div class="col-12 bg-danger">
	<h1 class="py-2 text-white"><b>Bienvenid@</b></h1>
	</div>
	</div>
	</div>
</header>
<body class="container-fluid">
	<div class="container mt-1" id="Main">
	<div class="row">
	<div class="col-12 col-md-6 col-lg-4  container" id="LoginCont">
		<h2 class="text-center py-1">Iniciar Sesión</h2>
		<form class="mt-5 mb-4" id="Login">
		<label for="UserNAme" >Usuario o correo electronico</label>
		<input type="text" class="form-control" id="UserName" name="Usuario"></input>
		<label for="UserPass">Contraseña</label>
		<input type="password" class="form-control" id="UserPass" name="Pass"></input>
		<input type="submit" value="Entrar" class="col-12 mt-4"></input>
		</form>
	</div>
	<div class="col-12 col-md-6 col-lg-4 container" id="RegistroCont">
		<h2 class="text-center py-1">Registrarse</h2>
		<form class="mt-5 mb-4" id="Registro">
		<label for="RegistrarUsuario" class="col-12">Nombre de usuario</label>
		<input type="text" class="form-control" id="RegistrarUsuario" autocomplete="off" name="NombreUsuario"></input>
		<p id="VerifUser">Verificador</p>
		<label for="RegistrarContraseñas" class="col-12" >Contraseña</label>
		<input type="password" class="form-control" id="RegistrarContraseña" name="Pass"></input>
		<p id="VerifPass">Verificador</p>
		<label for="RepetirContraseña" class="col-12" >Repetir Contraseña</label>
		<input type="password" class="form-control" id="RepetirContraseña"></input>
		<p id="VerifPass2">Verificador</p>
		<label for="RegistrarCorreo" id="Correo" class="col-12">Correo</label>
		<input type="text" class="form-control" id="RegistrarCorreo" name="Correo"></input>
		<p id="VerifCorreo" >Verificador</p>
		<input type="submit" value="Enviar Datos" class="col-12 mt-4"></input>
		</form>
	</div>
	</div>
	<aside class="row">
	<p class="text-center text-white col-12">La red social destinada a los artistas</p>
	</aside>
	</div>
	<footer class="row">
	<div class="col-12">
	<p class="text-center">2lips.com Igor Mejias @2020, todos los derechos reservados</p>
	</div>
	</footer>
</body>





<script src="Scripts/jquery-3.4.1.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="Scripts/LoginRegistro.js"></script>
</html>
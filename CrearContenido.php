<?php
session_start();
$Usuario=$_SESSION['User'];
if($_SESSION==null || $_SESSION==''){
	header('location:Login.php');
}
?>
<html>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Crear</title>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Css/CrearContenido.css">
</head>
<header>
<?php include('Header.php');?>
</header>
<body>
<div class="container bg-light">
<?php include('NavBar.php');?>
<div class="row">
<div class="col-12 col-md-6">
<h2 id="Pasos"></h2>
<form>
<label for="CTitulo" class="mt-4">Titulo</label>
<input class="form-control" type="text" id="CTitulo"></input>
<label for="Categoria">Categoria</label>
<select class="form-control" type="select" id="Categoria">
<option>Dibujos</option>
<option>Fotografia</option>
<option>Videos</option>
<option>Libros</option>
<option>Poemas</option>
<option>Reflexiones</option>
<option>Música</option>
<option>Idiomas</option>
</select>
<label for="Autor">Autor</label>
<input class="form-control" type="text" id="Autor" value="<?php echo $Usuario; ?>"></input>
<label for="Portada">Portada</label>
<input class="form-control col-4" type="file" id="Portada"></input>
<button class="form-control mt-4" id="Siguiente">Siguiente</button>
</form>
</div>
<div class="col-12 col-md-6">
<h3>Ayuda</h3>
<p id="Explicacion">
Estas opciones se mostrarán en la vista previa de la publicación<br>
-Pasa el mouse por encima de los campos para saber más.
</p>
<p id="Ayuda">
</p>
</div>
</div>
</div>
</body>
<script src="Scripts/CrearContenido.js"></script>
</html>
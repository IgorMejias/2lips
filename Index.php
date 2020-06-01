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
<title>2lipS</title>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Css/IndexStyle.css">
</head>
<header>
<?php include('Header.php');?>
</header>
<body>
<div class="container bg-light">
<?php include('NavBar.php');?>
<div class="row my-1">
<div class="LeftBar d-none d-md-block col-3 text-white">
<nav>
<p class="UserP text-center p-1 col-12"><a href="" class="UserPa d-block"><?php echo $Usuario; ?></a></p>
<p class="UserP text-center p-1 col-12"><a href="" class="UserPa d-block">Mensajes</a></p>
<p class="Crear text-center p-1 col-12"><a href="CrearContenido.php" class="UserPa d-block">Crear</a></p>
</nav>
</div>
<div id="MainContent" class="col-12 col-md-9">
<div id="Recientes" class="col-12">
<h2>Más Recientes</h2>

</div>
<div id="Follows" class="col-12">
<h3>Follows</h3>
</div>
<div id="Muestras" class="col-12">
<h3>Muestras</h3>
</div>
</div>
</div>
	
</div>
</body>
<script src="Scripts/Index.js"></script>
</html>
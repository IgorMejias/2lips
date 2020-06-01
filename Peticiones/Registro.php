<?php
include('conectar2lips.php');
$Usuario=$_POST['NombreUsuario'];
$Pass=$_POST['Pass'];
$Correo=$_POST['Correo'];
$Confirmar=true;
if($Usuario==$Pass || strlen($Usuario)<6 || strlen($Pass)<6){
	$Confirmar=false;
	echo "Buen intento crack, Nice try!, por favor no intentes violar el sistema ¡DE SEGUIR INTENTANDO SE BLOQUEARÁ TU IP!";
}
if($Confirmar){
$Verificar=mysqli_query($conectar,"SELECT * FROM `registro` WHERE `Usuario`='$Usuario'");
if($Ver1=mysqli_fetch_array($Verificar)){
	echo "El nombre de usuario ya está registrado~~";
}
$Verificar=mysqli_query($conectar,"SELECT * FROM `registro` WHERE `Correo`='$Correo'");
if($Ver2=mysqli_fetch_array($Verificar)){
	echo "El correo ya está en uso";
}
if(!$Ver1 && !$Ver2){
$Query=mysqli_query($conectar,"INSERT INTO `registro` (`Usuario`,`Pass`,`Correo`,`Foto`,`Verificada`) VALUES ('$Usuario','$Pass','$Correo','Fotosdeperfil/Default.jpg','No')");
if($Query){
	include('conectarUsuarios.php');
	$Tabla=mysqli_query($conectar,"CREATE TABLE `$Usuario` (`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`Nombre` varchar(1000) DEFAULT '',`Descripcion` varchar(4000) DEFAULT '',`Tipo` varchar(1000) DEFAULT '',`Categoria` varchar(1000) DEFAULT 'Sin categoria')");
	echo "Datos Registrados, ingresa a tu cuenta y verifica tu correo electronico";
}
else{
	echo "No se han podido registrar los datos";
}
}
}
?>
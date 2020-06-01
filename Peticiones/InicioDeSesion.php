<?php
include('conectar2lips.php');
$Usuario=$_POST['Usuario'];
$Pass=$_POST['Pass'];
$UsuarioConfirmado=true;
$PassConfirmada=true;
$Query1=mysqli_query($conectar,"SELECT * FROM `registro` WHERE `Usuario`='$Usuario'");
if(!$Ver1=mysqli_fetch_array($Query1)){
$Respuesta=array(
	'Respuesta'=>'Usuario no registrado',
	'Usuario'=>'Nulo'
);
echo json_encode($Respuesta);
$UsuarioConfirmado=false;
}
if($UsuarioConfirmado){
$Query1=mysqli_query($conectar,"SELECT * FROM `registro` WHERE `Usuario`='$Usuario' AND `Pass`='$Pass'");
if(!$Ver1=mysqli_fetch_array($Query1)){
$Respuesta=array(
	'Respuesta'=>'Clave Invalida',
	'Usuario'=>'Nulo'
);
echo json_encode($Respuesta);
$PassConfirmada=false;
}
}
if($UsuarioConfirmado & $PassConfirmada){
session_start();
$_SESSION['User']=$Usuario;
$Respuesta=array(
	'Respuesta'=>'Confirmado',
	'Usuario'=>$Usuario
);
echo json_encode($Respuesta);
}
mysqli_close($conectar);
?>
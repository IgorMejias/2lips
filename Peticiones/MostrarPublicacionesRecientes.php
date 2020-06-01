<?php
include('conectar2lips.php');
$Arreglo=array();
$Query=mysqli_query($conectar,"SELECT * FROM `publicaciones` WHERE `Fecha`>=CURRENT_DATE-1");
while($Ver=mysqli_fetch_array($Query)){
$Agg=array(
	'Autor'=>$Ver['Autor'],
	'Portada'=>$Ver['Portada'],
	'Titulo'=>$Ver['Titulo'],
	'Fondo'=>$Ver['Fondo']
);
array_push($Arreglo,$Agg);
}
echo json_encode($Arreglo);
?>
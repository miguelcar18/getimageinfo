<?php
header('Content-Type: application/json');
$imagen = getimagesize($_FILES['imagen']['tmp_name']);

switch($imagen[0]){
	case ($imagen[0] < 640):
	$porcentajeAncho = (640-$imagen[0])*100/640;
	$ancho = $porcentajeAncho."% menor";
	break;

	case ($imagen[0] > 640):
	$porcentajeAncho = ($imagen[0]-640)*100/640;
	$ancho = $porcentajeAncho."% mayor";
	break;

	case ($imagen[0] = 640):
	$ancho = "de igual";
	break;
}

switch($imagen[1]){
	case ($imagen[1] < 640):
	$porcentajeAlto = (640-$imagen[1])*100/640;
	$alto = $porcentajeAlto."% menor";
	break;

	case ($imagen[1] > 640):
	$porcentajeAlto = ($imagen[1]-640)*100/640;
	$alto = $porcentajeAlto."% mayor";
	break;

	case ($imagen[1] = 640):
	$alto = "de igual";
	break;
}

$datos = array(
	'estado' 	=> 'ok',
	'ancho' 	=> $ancho, 
	'alto' 		=> $alto
);
echo json_encode($datos, JSON_FORCE_OBJECT);
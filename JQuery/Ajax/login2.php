<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();

if ($el_usuario=="Juan") {
  
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
	$json = json_encode($el_array);
	echo $json;


}else if ($el_usuario=="Ivan") {
  
	$el_array->Nombre = "Ivan";
	$el_array->Apellido = "Aguilar";
	$el_array->Edad = "32";
	$json = json_encode($el_array);
	echo $json;


}else if ($el_usuario=="Evelyn") {
  
	$el_array->Nombre = "Evelyn";
	$el_array->Apellido = "Raynal";
	$el_array->Edad = "32";
	$json = json_encode($el_array);
	echo $json;


}else{
	$el_array->Nombre = "No encontrado";
	$el_array->Apellido = "No encontrado";
	$el_array->Edad = "--";
	$json = json_encode($el_array);
	echo $json;
}



?>
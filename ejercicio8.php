<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boletin 1</title>
</head>

<body>
	<h2>Mostrar contenido del array</h2>

	<?php
	$capitales = [
		"1.argentina" => "buenos aires",
		"2.españa" => "madrid",
		"3.uruguay" => "montevideo",
		"4.japon" => "tokio"
	];

//PARAMETROS DEL FOREACH: (nombre del array as nombrar una variable para la clave => nombrar una variable para el valor)
//(array as $clave => $valor){
//	echo $clave . $valor
//}
	foreach($capitales as $clave => $valor){
		echo $clave . ": "  . $valor;
		echo "<br>";
	}
	?>

<h2>Ordenando array asociativos con ksort</h2>
<!--
	sort= ordena un array
	ksort= ordena ascendentemente por clave
	asort= ordena ascendentemente por valor 
	krsort= ordenan descendentemente por clave
	arsort=  ordena descendentemente por valor
-->

<?php
	ksort($capitales);
	foreach($capitales as $clave => $valor){
		echo $clave . ": "  . $valor;
		echo "<br>";
	}	
	?>

<h2>Eliminando posiciones del array</h2>
<!-- 
	unset= elimina variables pero se puede usar para eliminar una posicion dentro del array
-->
<?php

unset($capitales["3.uruguay"]);


foreach($capitales as $clave => $valor){
	echo $clave . ": "  . $valor;
	echo "<br>";
}	

?>


</body>

</html>
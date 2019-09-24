 <!DOCTYPE html>
<html>
<head>
	<title>Ej_6</title>
</head>
<body>
	<?php
	$numero = 3;
	$cantidad = 100;
	$respuesta;
	$i=1;

	for ($respuesta=1; $respuesta <$cantidad ;$i++) { 
		$respuesta= pow($i, $numero);
		echo $respuesta. "<br>";
	}
	?>

</body>
</html>
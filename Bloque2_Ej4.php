<html>
<head>
	<title>Ejericio 4</title>
</head>
<body>
	<?php
	$frutas = "manzana pera limon sandia melon";
	$array = explode(" ", $frutas);
	$longitud = [];

	for ($i=0; $i < count($array); $i++) { 
		array_push($longitud, strlen($array[$i]));
	}

	$arrayAsociativo = array_combine($array, $longitud);
	foreach ($arrayAsociativo as $valor) {
		echo $valor."<br>";
	}
	?>

</body>
</html>
<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php
	$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	$factoriales = [];
	for ($i=0; $i < count($numeros); $i++) { 
		array_push($factoriales, Factorial($numeros[$i]));
	}
	foreach ($factoriales as $valor) {
		echo $valor."<br>";
	}

	function Factorial($num){ 
    $factorial = 1; 
    for ($i = 1; $i <= $num; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
	} 
	?>

</body>
</html>
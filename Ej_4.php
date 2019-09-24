<!DOCTYPE html>
<html>
<head>
	<title>Ej_4</title>
</head>
<body>
	<?php
	$cadena = "somos";
	$invertida = strrev($cadena);

	if(strcmp($cadena, $invertida)==0){
	    echo "La frase o palabra ".$cadena." es un palindromo.";
	}
	else {
	    echo "La frase o palabra ".$cadena." no es un palindromo.";
	}
	?>

</body>
</html>
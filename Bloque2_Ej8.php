<html>
<head>
	<title>Ejericio 8</title>
</head>
<body>
	<?php
	$nombre_fichero = "Bloque2_Ej8.php";

	if (file_exists($nombre_fichero)) {
	    echo "El fichero $nombre_fichero existe";
	} else {
	    echo "El fichero $nombre_fichero no existe";
	}

	?>

</body>
</html>
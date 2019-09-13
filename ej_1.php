<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>

        <?php
            $puertas = 1;
            for($pisos=1; $pisos <=5; $pisos++){
                for($puertas=1; $puertas<5; $puertas++){
                echo "Piso ",$pisos," puertas ",$puertas,"<br>";
                }
                echo "<br>";
            }
        ?>

    </body>
</html>
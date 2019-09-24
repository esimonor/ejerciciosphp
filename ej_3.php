<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>

        <?php
        $edad=rand(0,100);
        if($edad > 0 && $edad <= 20){
            echo("La edad está entre 0 y 20 años <br>");
        } else if ($edad >20 && $edad <=40){
            echo("La edad está entre 20 y 40 años <br>");
        } else if ($edad >40 && $edad <=60){
            echo("La edad está entre 40 y 60 años <br>");
        } else if ($edad >60 && $edad <=80){
            echo("La edad está entre 60 y 80 años <br>");
        } else if ($edad >80 && $edad <=100){
            echo("La edad está entre 80 y 100 años <br>");
        }
        echo "La edad exacta es ". $edad;
        ?>

    </body>
</html>
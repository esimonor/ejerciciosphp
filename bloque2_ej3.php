<!DOCTYPE html>
<html>
    <head>
        <title>Bloque 2 ej_3</title>
    </head>
    <body>
        <?php
        $numeros=[];
        for($i=0;$i<=20;$i++){
            array_push($numeros,rand(0,50));
        }

        foreach($numeros as $contador){
            echo $contador.", ";
        }
        echo "<br>";
        echo "El valor maximo es:".max($numeros).", y el valor minimo:".min($numeros);
        $media=array_sum($numeros)/20;
        echo "<br>";
        echo "La media de todos los numeros es:".$media;
        ?>

    </body>
</html>
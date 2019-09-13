<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>

        <?php
        $edad=rand(0,100);
        $min=$edad-10;
        $max=$edad+10;
        if($min<0){
            $min=0;
        }
        if($max>100){
            $max=100;
        }
        echo "El rango de edad de ",$edad," esta entre ",$min, " y ", $max;
        ?>

    </body>
</html>
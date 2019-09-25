<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
        $cantidad=60000;
        
        if($cantidad<10000){
            $comision=$cantidad*0.05;
            echo "La comision es $comision";
        }
        elseif($cantidad>=10000 && $cantidad<20000){
            $comision=$cantidad*0.08;
            echo "La comision es $comision";
        }
        elseif($cantidad>=20000 && $cantidad<40000){
            $comision=$cantidad*0.1;
            echo "La comision es $comision";
        }
        elseif($cantidad>=40000){
            $comision=$cantidad*0.13;
            echo "La comision es $comision";
        }
        ?>

    </body>
</html>
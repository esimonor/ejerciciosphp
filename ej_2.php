<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>

        <?php
            $num1=rand(1,100);
            $num2=rand(1,100);
            $num3=rand(1,100);

            if($num1>$num2 && $num1>$num3){
                echo "El numero ",$num1," es mayor que ",$num2," y ", $num3;
            }
            else{
                if($num2>$num3){
                    echo "El numero ",$num2," es mayor que ",$num1," y ", $num3;
                }
                else{
                    echo "El numero ",$num3," es mayor que ",$num2," y ", $num1;
                }
            }
        ?>

    </body>
</html>
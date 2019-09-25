<!DOCTYPE html>
<html>
    <head>
        <title>Funciones</title>
    </head>
    <body>

    <?php
        function operadores ($operador,$num1,$num2){
            return $operador($num1,$num2);
        }
        function suma ($num1, $num2){
            $resul=$num1+$num2;
            return $resul;
        }
        function resta ($num1, $num2){
            $resul=$num1-$num2;
            return $resul;
        }
        function multiplicacion ($num1, $num2){
            $resul=$num1*$num2;
            return $resul;
        }
        function division ($num1, $num2){
            $resul=$num1/$num2;
            return $resul;
        }  

        echo operadores("multiplicacion",3,8)."<br>";
        echo operadores("division",9,2)."<br>";
        echo operadores("resta",4,4)."<br>";
        echo operadores("suma",27,98)."<br>";
    ?>
    
    </body>
</html>
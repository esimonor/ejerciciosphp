<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>

        <?php
        $numero=rand(0,100);
        echo $numero."<br>";
            while($numero!=1){
                if($numero%2==0){
                    $numero=$numero/2;
                    echo $numero."<br>";
                }
                else{
                $numero=$numero*3+1;
                echo $numero."<br>";
                }
            }
        ?>

    </body>
</html>
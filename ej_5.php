<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>

        <?php
        $edad=rand(0,20);
        $alturaCM=rand(50,170);
        $acompañado=FALSE;
        
        if($edad<10 && $acompañado==FALSE && $alturaCM<120){
            echo "No se puede pasar si tienes ".$edad." años y no estas acompañado o mides ".$alturaCM." (altura minima 120cm)";
        }
        elseif($edad<10 && $acompañado==FALSE && $alturaCM>120){
            echo "Puedes pasar ya que mides mas de 120cm (tu altura es $alturaCM cm)";
        }
        else{
            echo "Pasa, entra";
        }
        ?>

    </body>
</html>
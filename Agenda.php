<!DOCTYPE html>
<html>
    <head>
        <title>Tarea Agenda</title>
        <style>
            input{
                width:11vw;
            }
        </style>
    </head>
    <body>
        <?php
        $nombre= strtolower($_POST["nombre"]);
        $correo= strtolower($_POST["correo"]);
        
        if($nombre==""){
            echo "<p>Por favor introduzca un nombre valido";
            /*$file = fopen("archivo.txt", "r");

            while(!feof($file)) {
            
            echo fgets($file). "<br />";
            
            }
            
            fclose($file);*/
        }
        else{
            echo "<p>Nombre contacto:$nombre</p><p>Correo de $nombre:$correo</p>";
        }
        ?>

        <form action="#" method="post">
        <p>Nombre <input type="text" name="nombre" placeholder="Nombre del contacto" pattern="[^'\x22]+"></p>
        <p>Correo <input type="text" name="correo" placeholder="Emilio del contacto"></p>
        <input type="submit" value="Añadir contacto">
        </form>

    </body>
</html>
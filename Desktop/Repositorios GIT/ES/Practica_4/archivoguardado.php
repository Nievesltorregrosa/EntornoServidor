<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ruta actual</title>
        <link rel="stylesheet" href="../Practica_4/Archivoguardado.css">
    </head> 
    <body>
        <div class="box">       
            <p> EL FICHERO HA SIDO GUARDADO <br> </p>
            <?php
            // Comprueba si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Obtiene los datos del formulario
                $archivo = $_POST["nombre"];
                $contenido = $_POST["contenido"];

                $archivoreal = fopen($archivo, "w") or die("No puede abrir el archivo");

                fwrite($archivoreal, $contenido);

                fclose($archivoreal);
            }else{
                echo "Error";
            }
            ?>     
            <a href="Opciones.php" class="boton">Volver</a>
        </div>                                                                                                                                                                                                                          
    </body>
</html>
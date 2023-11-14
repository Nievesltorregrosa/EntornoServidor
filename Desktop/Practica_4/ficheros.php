<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opciones</title>
        <link rel="stylesheet" href="../Practica_4/Sopciones.css">
    </head> 
    <body>
        <div class="box">       
            <p>Este es el contenido del fichero  <br> </p>
            <?php
                // Comprueba si se ha enviado el formulario
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $archivo= $_POST["nombre"];

                    // Obtiene los datos del formulario
                    if(file_exists($archivo)) {
                        // Leer el archivo
                        $contenido = file_get_contents($archivo);
                
                        echo $contenido;

                    } else {
                        echo "El archivo no existe.";
                    }
                }
            ?> 
            <a href="Opciones.php" class="boton">Volver</a>
        </div>                                                                                                                                                                                                                 
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones</title>
    <link rel="stylesheet" href="../Practica_4/Sopciones.css">
</head>

<body>

    <?php
    session_start();
    $fechaHoraAcceso = isset($_SESSION["login_time"]) ? $_SESSION["login_time"] : "";
    // Verifica si el usuario ha iniciado sesión
    ?>

    <div class="box">
        <p>Fecha y hora de acceso: <br> <?php echo $fechaHoraAcceso; ?> <br> </p>
        <a href='rutaactual.php'>Obtener Ruta Actual</a><br>
        <a href='buscarfichero.php'>Buscar un Fichero</a><br>
        <?php if ($_SESSION["role"]== "admin"){?>
            <a href='crearfichero.php'>Crear un Nuevo Fichero</a><br>
        <?php } ?>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Fichero</title>
        <link rel="stylesheet" href="../Practica_4/style.css">
    </head>
    <body>
        <div>
            <div class="login-box">
                <h2>Login</h2>
                <form action="archivoguardado.php" method="post">
                    <div class="user-box">
                        <input type="text" name="nombre" required>
                        <label>Nombre del archivo</label>
                    </div>
                    <div class="user-box">
                        <input type="textarea" name="contenido" required>
                        <label>Contenido</label>
                    </div>
                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>                                                                                                                                                                                                                                        
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conectando con la base de datos en PHP</title>
</head>
<body>
    
    <?php

    # Crea una nueva conexión con mysql con la BASE de DATOS biblioteca
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');

    # El usuario root sin password viene por defecto en XAMPP
    # Lo usaremos para desarrollo y pruebas
    # En producción nunca lo tendremos así

    # Establece la codificación de caracteres UTF-8
    $conexion->set_charset('utf8');

    echo "<p>La conexión se ha establecido correctamente</p>";

    ?>


</body>
</html>
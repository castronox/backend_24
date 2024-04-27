<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>
    
    <?php
    # Crea una coexión con la BBDD biblioteca
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');

    # Estable conjunto de caracteres UTF-8

    $conexion->set_charset('utf8');

    echo "<p>Conexión establecida correctamente</p>";

    # #Una vez conectado , hacemos consultas a la base de datos

    // .......CODIGO DE CONSULTAS--....

    # Cerramos la conexión (opcional, solo es necesario en conexiones persistentes)
    $conexion->close();

    ?>


</body>
</html>
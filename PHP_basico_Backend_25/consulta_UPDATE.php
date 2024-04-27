<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta UPDATE con PHP</title>
</head>
<body>
    
    <?php
    # Conecta y establece el charset
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
    $conexion->set_charset('utf8');

    # Preparamos consulta de actualización
    $consulta = "
            UPDATE libros
            SET titulo='La historia interminable'
            WHERE titulo='Neverending Story'";

    # Lanzamos consulta a la base de datos

    $conexion->query($consulta);

    echo "<p>Actualización de $conexion->affected_rows filas OK</p>";

    ?>


</body>
</html>
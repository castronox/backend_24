<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta DELETE en PHP</title>
</head>
<body>
    
    <?php
    # Conecta y establece el charset
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
    $conexion->set_charset('utf8');

    # Preparamos la consulta

    $consulta = "DELETE FROM libros
                 WHERE titulo='La historia interminable'";

    # Enviamos la consulta a la base de datos

    $conexion->query($consulta);

    echo "<p>Borrado de $conexion->affected_rows filas OK</p>";
    ?>


</body>
</html>
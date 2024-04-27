<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fetch Oject en PHP</title>
</head>
<body>
    
    <?php
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
    $conexion->set_charset('utf8');

    $consulta = "SELECT id, titulo, autor FROM libros ORDER BY id ASC";
    $resultado = $conexion->query($consulta);

    while ($libro = $resultado->fetch_object()) {

        echo "$libro->id - $libro->titulo, de $libro->autor.<br/>";
    }

    $resultado->free();

    ?>


</body>
</html>
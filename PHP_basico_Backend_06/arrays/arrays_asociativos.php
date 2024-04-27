<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arrays asociativos PHP</title>
</head>
<body>
    
    <?php
    $persona = []; # Crea un array vacío
    $persona['nombre'] = 'Pepe'; # Añade la clave 'nombre'.
    $persona['apellido'] = 'Lopez'; # Añade la clave 'apellido'.
    $perosna['edad'] = 22; # Añade la clave 'edad'.

    echo "<pre>";
    print_r($persona);
    echo "</pre>";

    // Accediendo a las posiciones
    $persona['nombre'] = 'Marta'; # Escritura
    echo '<p>' . $persona['apellido'] . '</p>'; # Lectura

    echo "<pre>";
    print_r($persona);
    echo "</pre>";
    ?>


</body>
</html>
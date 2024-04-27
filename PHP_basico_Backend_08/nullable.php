<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parámetro NULLABLE en PHP</title>
</head>
<body>
    
    <?php

    # Esta función se puede escribir en un string o un NULL
    # El parámetro no es opcional, no tiene valor por defecto
    function saludar(?string $mensaje)
    {
        echo $mensaje ?? "Hola";
    }

    # Pruebas

    saludar("Bienvenido"); # Bienvenido
    echo "<br>";

    saludar(NULL); # Hola
    echo "<br>";

    saludar(); # Error
    echo "<br>";

    ?>


</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear funciones en PHP</title>
</head>
<body>
    
    <?php

    # Funcion Cubo en PHP

    // Calcula el numero de un Cubo
    function cubo($numero)
    {
        return $numero * $numero * $numero;
    }

    echo cubo(3);
    echo "<br>";

    echo cubo(5);
    echo "<br>";

    echo cubo(0);
    echo "<br>";

    echo cubo(- 2);
    echo "<br>";

    // Usos incorrectos
    echo cubo(2, 4, 5);
    echo "<br>";

    echo cubo("Patata");
    echo "<br>";

    echo cubo();
    echo "<br>";

    ?>


</body>
</html>
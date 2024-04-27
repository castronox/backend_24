<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones para string en PHP</title>
</head>
<body>
    
    <?php

    # Cadena de texto
    $texto = "HOLA MUNDO!";

    echo $texto . '<br>';

    echo strtolower($texto) . '<br>';
    echo strrev($texto) . '<br>';
    echo md5($texto) . '<br>';

    # La variable original no cambia.

    echo $texto . '<br>';

    # Si queremos que cambie :

    $texto = strrev($texto);
    echo $texto . '<br>';

    ?>


</body>
</html>
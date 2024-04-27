<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comillas dobles y simples en PHP</title>
</head>
<body>
    
    <?php
    $a = "Patatas";
    $b = 100;

    # Entrecomillado doble
    $texto = "Hay $b $a en la cesta. \n";

    echo $texto . '<br>';

    # Entrecomillado simple (ERROR)
    $texto = 'Hay $b $a en la cesta. \n';

    echo $texto . '<br>';

    // Entrecomillado simple
    $texto = 'Hay' . $b . ' ' . $a . ' en la cesta';

    echo $texto . '<br>';

    ?>


</body>
</html>
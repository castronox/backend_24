<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Constantes Predefinidas</title>
</head>
<body>
    
    <?php

    // Constantes del núcleo.
    echo PHP_VERSION . '<br>';
    echo PHP_OS . '<br>';
    echo PHP_OS_FAMILY . '<br>';
    echo PHP_INT_MIN . '<br>';
    echo PHP_INT_MAX . '<br>';
    echo PHP_FLOAT_MIN . '<br>';
    echo PHP_FLOAT_MAX . '<br>';

    // Constantes mágicas
    function test()
    {
        echo __LINE__ . '<br>';
        echo __FILE__ . '<br>';
        echo __DIR__ . '<br>';
        echo __FUNCTION__ . '<br>';
    }

    test();

    ?>


</body>
</html>
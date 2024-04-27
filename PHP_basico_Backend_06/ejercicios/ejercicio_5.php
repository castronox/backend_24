<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 5 PHP</title>
</head>
<body>
    
    <?php
    $multiplica = 5;
    $limite = 11;

    for ($i = 0; $i < $limite; $i ++) {

        echo $multiplica . ' X ' . $i . ' = ' . $i * $multiplica . '<br>';
    }

    ?>


</body>
</html>
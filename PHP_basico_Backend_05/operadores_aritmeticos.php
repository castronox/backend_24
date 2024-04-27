<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operadores aritméticos</title>
</head>
<body>
    
    <?php
    $a = 10;
    $b = 5;

    echo - $a . '<br>'; // -10
    echo $a + $b . '<br>'; // 15
    echo $a - $b . '<br>'; // 5
    echo $a * $b . '<br>'; // 50
    echo $a / $b . '<br>'; // 2
    echo $a % $b . '<br>'; // 0
    echo $a ** $b . '<br>'; // 100000

    // Operador NO aritético
    // No obstante se puede utilizar con numeros.
    echo $a . $b . '<br>'; // 105
    ?>


</body>
</html>
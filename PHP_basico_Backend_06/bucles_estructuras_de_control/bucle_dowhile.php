<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bucle Do while PHP</title>
</head>
<body>
    
    <?php
    echo '<h2>Bucle do..While</h2>';

    $i = 5; // Comenzaremos en 5

    do {
        echo $i . '<br>'; // Imprime $i
        $i --; // Resta 1 a $i
    } while ($i >= 0); // Mientras $i sea mayor o igual a 0

    ?>


</body>
</html>
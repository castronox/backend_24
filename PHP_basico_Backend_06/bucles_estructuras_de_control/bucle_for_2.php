<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bucle de incrementos múltiples en PHP</title>
</head>
<body>
    
    <?php
    echo '<h2>Bucle FOR para realizar inicializaciones e incrementos múltiples</h2>';

    for ($i = 0, $j = 10; $i != $j; $i ++, $j --) {
        echo "$i - $j <br>";
    }
    ?>


</body>
</html>
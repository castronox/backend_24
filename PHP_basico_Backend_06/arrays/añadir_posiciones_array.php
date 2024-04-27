<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Añadir posiciones a un array PHP</title>
</head>
<body>
    
    <?php
    echo "<h2> Nuevas posiciones en un array PHP</h2>";

    $lista = [
        10,
        20
    ]; // Posiciones 0 y 1
    $lista[5] = 50; // Nueva Posición 5

    echo "<pre>";
    var_dump($lista);
    echo "</pre>";

    ?>


</body>
</html>
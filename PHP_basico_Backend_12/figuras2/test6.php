<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Varias operaciones en una sola sentencia PHP</title>
</head>
<body>
	<h2>Varias Operaciones en una sola sentencia</h2>
    
    <?php
    require_once 'Punto.php';

    echo "<h2> Chaining en PHP </h2>";

    $punto1 = new Punto(100, 200); # Crea un punto
    echo $punto1 . '<br>'; # (100,200)

    # Lo lleva al origen y lo mueve dos veces en la misma línea de código

    $punto1->aOrigen()
        ->mover(1, 2)
        ->mover(10, 20);
    echo $punto1 . "<br>"; # (11,12)

    ?>


</body>
</html>
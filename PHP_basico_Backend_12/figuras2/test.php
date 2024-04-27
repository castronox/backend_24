
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Creando puntos en PHP</title>
</head>
<body>


	<h2>Creando puntos:</h2>
    <?php
    require_once 'Punto.php';

    $punto1 = new Punto();
    echo $punto1 . "<br>";

    $punto2 = new Punto(10);
    echo $punto2 . "<br>";

    $punto3 = new Punto(10, 20);
    echo $punto3 . "<br>";

    ?>


</body>
</html>
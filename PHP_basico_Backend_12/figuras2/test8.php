<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Usando el método estatico en PHP</title>
</head>
<body>
    
    <?php
    require_once 'Punto.php'; # Carga la clase punto

    echo "<h2> Métodos estáticos </h2>";

    $p1 = new Punto(100, 100); # Crea un punto
    $p2 = new Punto(200, 200); # Crea un segundo punto

    # Llamada al método estático
    # Se usda de forma parecida a una función, anteponiendo el nombre de la clase
    $d = Punto::distanciaentre($p1, $p2);

    echo "Distancia entre puntos: $d <br>"; # 141

    ?>


</body>
</html>
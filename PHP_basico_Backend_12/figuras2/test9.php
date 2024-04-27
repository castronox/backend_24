<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>
    
    <?php
    require_once 'Punto.php'; # Carga la clase Punto

    echo "<h2> Estático vs de objeto </h2>";

    $p1 = new Punto(100, 100); # Crea un punto
    $p2 = new Punto(200, 200); # Crea un punto

    # Calcula la distancia usando el método estático
    $d = Punto::distanciaentre($p1, $p2);
    echo "Distancia entre puntos: $d <br>"; # 141

    # Calcula la distancia usando el método de objeto

    $d = $p1->distanciaHasta($p2);
    echo "Distancia entre Puntos: $d <br>";

    # Igual que antes pero interviniendo el orden de los puntos
    $d = $p2->distanciaHasta($p1);
    echo "Distancia entre puntos: $d <br>"; # 141

    ?>


</body>
</html>
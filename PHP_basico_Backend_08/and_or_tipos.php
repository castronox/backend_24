<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AND y OR de Tipos en PHP</title>
</head>
<body>

    
    <?php

    class Coche
    {
    }
    ;

    class Moto
    {
    }
    ;

    class Patata
    {
    }
    ;

    # Esta función recibe un coche o una moto
    function arrancar(Coche|Moto $vehiculo)
    {
        echo "BRUM BRUM";
    }

    # Pruebas
    $coche = new Coche();
    arrancar($coche);
    echo "<br>";

    $moto = new Moto();
    arrancar($moto);
    echo "<br>";

    $patata = new Patata();
    arrancar($patata);

    ?>


</body>
</html>
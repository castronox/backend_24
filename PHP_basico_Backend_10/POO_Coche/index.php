<?php include 'Coche.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clase coche PHP</title>
</head>
<body>
    
    <?php

    # Creación de un objeto COCHE
    $coche = new Coche('Volkswagen', 'EOS', 120);
    $coche->avanzar(100);

    echo $coche;

    echo '<br>';

    # Crear otro Coche
    $coche = new Coche('Mazda', 'MX-5', 140);
    $coche->avanzar(340);

    echo $coche;

    ?>


</body>
</html>
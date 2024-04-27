<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Constantes de clase PHP</title>
</head>
<body>
    
    <?php
    require_once 'Punto2.php';

    echo "<h2>Constantes de clase en PHP</h2>";

    $p1 = new Punto(); # Crea un punto
    echo $p1 . '<br>';

    echo 'El origen X es :' . Punto::ORIGX . '<br>';
    echo 'El origen Y es :' . Punto::ORIGY . '<br>';
    ?>


</body>
</html>
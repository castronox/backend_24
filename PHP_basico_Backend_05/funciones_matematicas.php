<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones matemáticas</title>
</head>
<body>

	<h1>Funciones matematicas en PHP</h1>
    
    <?php
    $radianes = 1 / 4 * pi(); // Número PI

    echo $radianes . ' <br>';
    echo rad2deg($radianes) . ' grados<br>'; // radianes a grados

    echo sin($radianes) . '<br>'; // Seno
    echo cos($radianes) . '<br>'; // Coseno

    echo pow(5, 3) . '<br>'; // elevar a
    echo hypot(3, 4) . '<br>'; // Hipotenusa
    echo decbin(5) . '<br>'; // Decima a binario
    echo dechex(255) . '<br>'; // Decimal a hexadecimal

    ?>


</body>
</html>
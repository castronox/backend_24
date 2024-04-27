<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Número de parámetros variable en PHP</title>
</head>
<body>
	<h1>Números de parametros variable en PHP</h1>
    
    
    <?php

    function sumar(float ...$numeros): float
    {
        $total = 0;

        foreach ($numeros as $numero)
            $total += $numero;

        return $total;
    }

    // Unit TEST o pruebas unitariias

    echo sumar() . '<br>';
    echo sumar(1) . '<br>';
    echo sumar(1, 2, 3, 4) . '<br>';
    echo sumar('patata') . '<br>';

    ?>


</body>
</html>
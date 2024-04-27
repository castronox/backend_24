<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operadores de comparación y nave espacial.</title>
</head>
<body>

	<h1>Operadores de comparación</h1>
	<p>Los operadores relacionales o de comparación, comparan valores y
		retornan un boolean (true o false)</p>

	<p>Se usan principalmente en bifurcaciones y bucles.</p>

	<p>El operador ternario ?: retorna lo que hay a la izquierda o derecha de los dos puntos, dependiendo del valor de la condición que hay antes del interrogante.
    
                <?php
                $a = 25; // Probar otros valores

                echo "<p> El número $a es ";

                // Paréntesis no necesarios, se ponen para observar mejor la comparación

                echo ($a > 100) ? "Mayor de 100, " : "Menor o igual a 100, ";
                echo ($a <= 10) ? "Menor o igual a 10, " : "Mayor de 10, ";

                echo ($a == 25) ? "es 25, " : "no es 25, ";
                echo ($a != 50) ? "no es 50, " : "es 50, ";

                echo ($a === "25") ? "y es 25 como texto." : "y no es 25 como texto";
                echo "</p>";

                ?>

	
	
	
	<h1>Operador nave espacial.</h1>

	<p>El operador nave espacial compara dos valores y retorna -1, 0 o 1
		dependiendo de cuál es menor o si son iguales.</p>
		
				<?php

    $a = 10;
    $b = 5; // Prueba también otros valores

    echo $a <=> $b; // $a es mayor que $b => 1
    echo '<br>';

    echo $b <=> $a; // $b es menos que $a => -1
    echo '<br>';

    echo $a <=> $a; // $a es igual a $a => 0

    echo '<br>';

    ?>
	
	
</body>
</html>
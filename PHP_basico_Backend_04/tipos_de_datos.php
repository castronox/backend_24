<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Determinación dinámica de tipos en PHP</title>
</head>
<body>
	<h1>Tipos de datos</h1>
	<p>Los tipos de las variables se determinan dinámicamente, en función
		del tipo de datos que guardamos en ella.</p>
    <?php
    /*
     * Tipos de datos
     *
     *
     * BOOLEAN ------------------------ true
     * INTEGER ------------------------ 5
     * FLOAT / DOUBLE ----------------- 523.365434
     * STRING ------------------------- "esto es un strig o cadena de caracteres"
     * ARRAY -------------------------- [0,1,2,3,4]
     * OBJECT ------------------------- Libro
     * RESOURCE ----------------------- MySQL Link
     * NULL --------------------------- NULL
     *
     *
     * NUMBER ---> Se acepta cualquier tipo numérico.
     * MIXED ----> Se aceptan diversos tipos de datos.
     *
     *
     * En PHP las variables con DETERMINACIÓN DINÁMICA DE TIPOS
     * - Lo que significa que se calcula en tiempo de ejecución el tipo de variable que es.
     *
     */
    $variable = 100; // Integer
    echo "<p>Ejemplo 1 --> La variable es de tipo <strong>" . gettype($variable) . "</strong> y su valor es $variable</p>";

    $variable = 123.456; // Float o double
    echo "<p>Ejemplo 2 --> La variable es de tipo <strong>" . gettype($variable) . "</strong> y su valor es $variable</p>";

    $variable = true; // Boolean
    echo "<p>Ejemplo 3 --> La variable es de tipo <strong>" . gettype($variable) . "</strong> y su valor es $variable</p>";

    $variable = 'Cadena de texto'; // String
    echo "<p>Ejemplo 4 --> La variable es de tipo <strong>" . gettype($variable) . "</strong> y su valor es $variable</p>";

    $variable = [
        0,
        1,
        2,
        3
    ]; // Array
    echo "<p>Ejemplo 5 --> La variable es de tipo <strong>" . gettype($variable) . "</strong></p>";

    $variable = new stdClass(); // Objeto
    echo "<p>Ejemplo 1 --> La variable es de tipo <strong>" . gettype($variable) . "</strong></p>";

    $variable = null; // NULO

    ?>


<h1>Un caso curioso</h1>
	<p>Al intentar hacer una suma, PHP asumirá que los operandos deben ser
		numéricos y realizará una conversion implícita</p>

<?php
$peli1 = "101 Dalmatas";
$peli2 = "28 Días";

@$resultado = $peli1 + $peli2;

echo "<p>El resultado es de tipo " . gettype($resultado) . "</p>";
echo "<p> Vale $resultado</p>";
?>
















</body>
</html>
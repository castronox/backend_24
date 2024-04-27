<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones de conversión en PHP</title>
</head>
<body>

	<h1>Probando INTVAL()</h1>

	<p>Vamos a ver cómo se comporta la función intval(); a la hora de
		convertir distintas cadenas de texto a números enteros.</p>

    <?php
    $a = "Un texto cualquiera";
    $b = "3 cerditos y el lobo";
    $c = "     5 espacios delante";
    $d = "10 20 30 40 50 60 70 80 90";

    echo "<p>La variable A pasada a entero es " . intval($a) . "</p>";
    echo "<p>La variable B pasada a entero es " . intval($b) . "</p>";
    echo "<p>La variable C pasada a entero es " . intval($c) . "</p>";
    echo "<p>La variable D pasada a entero es " . intval($d) . "</p>";
    ?>
     
     <h1>Probando FLOATVAL()</h1>
     
     <?php
    $a = "Un texto cualquiera";
    $b = "3 cerditos y el lobo";
    $c = "     5 espacios delante";
    $d = "10 20 30 40 50 60 70 80 90";

    echo "<p>La variable A pasada a decimal FLOAT es " . floatval($a) . "</p>";
    echo "<p>La variable B pasada a decimal FLOAT es " . floatval($b) . "</p>";
    echo "<p>La variable C pasada a decimal FLOAT es " . floatval($c) . "</p>";
    echo "<p>La variable D pasada a decimal FLOAT es " . floatval($d) . "</p>";

    ?>
     
     <h1>Probando DOUBLEVAL()</h1>
     
          <?php
        $a = "Un texto cualquiera";
        $b = "3 cerditos y el lobo";
        $c = "     5 espacios delante";
        $d = "10 20 30 40 50 60 70 80";

        echo "<p>La variable A pasada a decimal DOUBLE es " . doubleval($a) . "</p>";
        echo "<p>La variable B pasada a decimal DOUBLE es " . doubleval($b) . "</p>";
        echo "<p>La variable C pasada a decimal DOUBLE es " . doubleval($c) . "</p>";
        echo "<p>La variable D pasada a decimal DOUBLE es " . doubleval($d) . "</p>";

        ?>


</body>
</html>
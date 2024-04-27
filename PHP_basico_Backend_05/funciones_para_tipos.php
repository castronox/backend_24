<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones para tipos</title>
</head>
<body>

	<h1>Funciones para tipos</h1>

	<p>Vamos a probar algunas de las funciones para comprobar o cambiar
		tipos</p>
    
       
    <?php
    $numero = 10.50;

    echo "<p> La variable es de tipo " . gettype($numero) . "</p>";

    if (is_double($numero))
        settype($numero, 'int');

    echo "<p>Pero ahora es de tipo " . gettype($numero) . "</p>";

    ?>


</body>
</html>